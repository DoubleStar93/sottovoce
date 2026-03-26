<?php

declare(strict_types=1);

const LEGACY_SITE_ROOT = __DIR__ . DIRECTORY_SEPARATOR . 'legacy' . DIRECTORY_SEPARATOR . 'www.addresshotels.com';
const OUTPUT_PAGES_ROOT = __DIR__ . DIRECTORY_SEPARATOR . 'pages';
const OUTPUT_DEPENDENCIES_ROOT = __DIR__ . DIRECTORY_SEPARATOR . 'dependencies';

/** @var array<string, string> */
$typeMap = [
    'css' => 'css',
    'js' => 'js',
    'mjs' => 'js',
    'json' => 'vendor',
    'map' => 'vendor',
    'svg' => 'img',
    'png' => 'img',
    'jpg' => 'img',
    'jpeg' => 'img',
    'webp' => 'img',
    'gif' => 'img',
    'ico' => 'img',
    'bmp' => 'img',
    'avif' => 'img',
    'woff' => 'fonts',
    'woff2' => 'fonts',
    'ttf' => 'fonts',
    'otf' => 'fonts',
    'eot' => 'fonts',
    'mp4' => 'media',
    'webm' => 'media',
    'mp3' => 'media',
    'wav' => 'media',
    'ogg' => 'media',
    'pdf' => 'docs',
    'xml' => 'vendor',
    'txt' => 'vendor',
];

if (!is_dir(LEGACY_SITE_ROOT)) {
    fwrite(STDERR, "Legacy path not found: " . LEGACY_SITE_ROOT . PHP_EOL);
    exit(1);
}

ensureDir(OUTPUT_PAGES_ROOT);
ensureDir(OUTPUT_DEPENDENCIES_ROOT);

/** @var array<string, string> */
$assetRouteMap = [];
/** @var array<string, string> */
$assetFileMap = [];
/** @var string[] */
$htmlFiles = [];

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator(LEGACY_SITE_ROOT, FilesystemIterator::SKIP_DOTS)
);

foreach ($iterator as $fileInfo) {
    if (!$fileInfo instanceof SplFileInfo || !$fileInfo->isFile()) {
        continue;
    }

    $absolutePath = $fileInfo->getPathname();
    $relative = normalizePath(substr($absolutePath, strlen(LEGACY_SITE_ROOT) + 1));
    $ext = strtolower(pathinfo($relative, PATHINFO_EXTENSION));

    if ($ext === 'htm') {
        $htmlFiles[] = $absolutePath;
        continue;
    }

    $bucket = $typeMap[$ext] ?? 'vendor';
    $targetRelative = normalizePath($bucket . '/' . $relative);
    $targetAbsolute = OUTPUT_DEPENDENCIES_ROOT . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $targetRelative);
    ensureDir(dirname($targetAbsolute));
    copy($absolutePath, $targetAbsolute);

    $legacyRootPath = '/' . $relative;
    $newRoutePath = '/dependencies/' . $targetRelative;
    $assetRouteMap[$legacyRootPath] = $newRoutePath;
    $assetFileMap[normalizePath($relative)] = $newRoutePath;
}

foreach ($htmlFiles as $htmlFile) {
    $htmlRelative = normalizePath(substr($htmlFile, strlen(LEGACY_SITE_ROOT) + 1));
    $htmlContent = file_get_contents($htmlFile);
    if ($htmlContent === false) {
        continue;
    }

    $pageDirRelative = normalizePath(dirname($htmlRelative));
    $htmlContent = rewriteLinks($htmlContent, $pageDirRelative, $assetRouteMap, $assetFileMap);

    $targetPageDir = OUTPUT_PAGES_ROOT . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $pageDirRelative);
    ensureDir($targetPageDir);
    $targetPageFile = $targetPageDir . DIRECTORY_SEPARATOR . 'index.php';

    $phpWrapper = "<?php declare(strict_types=1); ?>\n" . $htmlContent;
    file_put_contents($targetPageFile, $phpWrapper);
}

echo "Build completed.\n";
echo "- Pages: " . count($htmlFiles) . PHP_EOL;
echo "- Dependencies: " . count($assetRouteMap) . PHP_EOL;

function rewriteLinks(string $html, string $pageDir, array $assetRouteMap, array $assetFileMap): string
{
    return preg_replace_callback(
        '/\b(href|src|content)=("|\')(.*?)\2/i',
        function (array $matches) use ($pageDir, $assetRouteMap, $assetFileMap): string {
            $attr = $matches[1];
            $quote = $matches[2];
            $url = $matches[3];

            $rewritten = rewriteUrl($url, $pageDir, $assetRouteMap, $assetFileMap);
            return $attr . '=' . $quote . $rewritten . $quote;
        },
        $html
    ) ?? $html;
}

function rewriteUrl(string $url, string $pageDir, array $assetRouteMap, array $assetFileMap): string
{
    $trimmed = trim($url);
    if ($trimmed === '') {
        return $url;
    }

    if (
        str_starts_with($trimmed, 'http://') ||
        str_starts_with($trimmed, 'https://') ||
        str_starts_with($trimmed, '//') ||
        str_starts_with($trimmed, 'data:') ||
        str_starts_with($trimmed, 'mailto:') ||
        str_starts_with($trimmed, 'tel:') ||
        str_starts_with($trimmed, '#') ||
        str_starts_with($trimmed, 'javascript:')
    ) {
        return $url;
    }

    [$path, $query, $fragment] = splitUrl($trimmed);

    // Keep root-level app routes untouched.
    if (str_starts_with($path, '/en/') || str_starts_with($path, '/ar/') || str_starts_with($path, '/fr/') || str_starts_with($path, '/de/') || str_starts_with($path, '/ru/') || str_starts_with($path, '/zh-')) {
        return $url;
    }

    $normalized = str_starts_with($path, '/')
        ? normalizePath(ltrim($path, '/'))
        : normalizePath($pageDir . '/' . $path);

    if (str_ends_with(strtolower($normalized), '.htm')) {
        $normalized = preg_replace('/\.htm$/i', '', $normalized) ?? $normalized;
        return '/pages/' . $normalized . '.php' . $query . $fragment;
    }

    $legacyRootPath = '/' . $normalized;
    if (isset($assetRouteMap[$legacyRootPath])) {
        return $assetRouteMap[$legacyRootPath] . $query . $fragment;
    }

    if (isset($assetFileMap[$normalized])) {
        return $assetFileMap[$normalized] . $query . $fragment;
    }

    return $url;
}

function splitUrl(string $url): array
{
    $query = '';
    $fragment = '';

    $hashPos = strpos($url, '#');
    if ($hashPos !== false) {
        $fragment = substr($url, $hashPos);
        $url = substr($url, 0, $hashPos);
    }

    $queryPos = strpos($url, '?');
    if ($queryPos !== false) {
        $query = substr($url, $queryPos);
        $url = substr($url, 0, $queryPos);
    }

    return [$url, $query, $fragment];
}

function ensureDir(string $path): void
{
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
    }
}

function normalizePath(string $path): string
{
    $path = str_replace('\\', '/', $path);
    $parts = [];
    foreach (explode('/', $path) as $segment) {
        if ($segment === '' || $segment === '.') {
            continue;
        }
        if ($segment === '..') {
            array_pop($parts);
            continue;
        }
        $parts[] = $segment;
    }
    return implode('/', $parts);
}
