<?php

declare(strict_types=1);

const LEGACY_SITE_ROOT = __DIR__ . DIRECTORY_SEPARATOR . 'legacy' . DIRECTORY_SEPARATOR . 'www.addresshotels.com';
const LEGACY_SITE_ROOT_ALT = __DIR__ . DIRECTORY_SEPARATOR . 'od_legacy' . DIRECTORY_SEPARATOR . 'www.addresshotels.com';
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

/** @var string $legacyRoot */
$legacyRoot = is_dir(LEGACY_SITE_ROOT) ? LEGACY_SITE_ROOT : LEGACY_SITE_ROOT_ALT;

if (!is_dir($legacyRoot)) {
    fwrite(STDERR, "Legacy path not found: " . LEGACY_SITE_ROOT . " or " . LEGACY_SITE_ROOT_ALT . PHP_EOL);
    exit(1);
}

ensureDir(OUTPUT_PAGES_ROOT);
ensureDir(OUTPUT_DEPENDENCIES_ROOT);

/** @var array<string, string> */
$assetRouteMap = [];
/** @var array<string, string> */
$assetFileMap = [];
/** @var array<string, string> */
$assetFullUrlMap = [];
/** @var string[] */
$htmlFiles = [];
/** @var array<string, bool> */
$rootAssetUrls = [];

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($legacyRoot, FilesystemIterator::SKIP_DOTS)
);

foreach ($iterator as $fileInfo) {
    if (!$fileInfo instanceof SplFileInfo || !$fileInfo->isFile()) {
        continue;
    }

    $absolutePath = $fileInfo->getPathname();
    $relative = normalizePath(substr($absolutePath, strlen($legacyRoot) + 1));
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
    $assetFullUrlMap[$legacyRootPath] = $newRoutePath;
}

foreach ($htmlFiles as $htmlFile) {
    $htmlContent = file_get_contents($htmlFile);
    if ($htmlContent === false) {
        continue;
    }

    $urls = extractLocalRootAssetUrls($htmlContent);
    foreach ($urls as $url) {
        $rootAssetUrls[$url] = true;
    }
}

foreach (array_keys($rootAssetUrls) as $rootUrl) {
    [$path, $query] = splitUrl($rootUrl);
    $normalized = normalizePath(ltrim($path, '/'));
    if ($normalized === '') {
        continue;
    }

    // Keep root-level routes as routes, not dependencies.
    if (str_starts_with($path, '/en/') || str_starts_with($path, '/ar/') || str_starts_with($path, '/fr/') || str_starts_with($path, '/de/') || str_starts_with($path, '/ru/') || str_starts_with($path, '/zh-')) {
        continue;
    }

    $fullLegacyUrl = '/' . $normalized . $query;
    if (isset($assetFullUrlMap[$fullLegacyUrl])) {
        continue;
    }

    $legacyFile = $legacyRoot . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $normalized);
    $targetRelative = buildDependencyTargetRelative($normalized, $query, $typeMap);
    $targetAbsolute = OUTPUT_DEPENDENCIES_ROOT . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $targetRelative);
    ensureDir(dirname($targetAbsolute));

    $copied = false;
    if (is_file($legacyFile)) {
        $copied = copy($legacyFile, $targetAbsolute);
    } else {
        $remoteUrl = 'https://www.addresshotels.com/' . $normalized . $query;
        $content = fetchRemoteAsset($remoteUrl);
        if ($content !== null) {
            file_put_contents($targetAbsolute, $content);
            $copied = true;
        }
    }

    if ($copied) {
        $newRoutePath = '/dependencies/' . $targetRelative;
        $assetFullUrlMap[$fullLegacyUrl] = $newRoutePath;
        if (!isset($assetRouteMap['/' . $normalized])) {
            $assetRouteMap['/' . $normalized] = $newRoutePath;
        }
        if (!isset($assetFileMap[$normalized])) {
            $assetFileMap[$normalized] = $newRoutePath;
        }
    }
}

syncMissingWebfontsFromCss();

foreach ($htmlFiles as $htmlFile) {
    $htmlRelative = normalizePath(substr($htmlFile, strlen($legacyRoot) + 1));
    $htmlContent = file_get_contents($htmlFile);
    if ($htmlContent === false) {
        continue;
    }

    $pageDirRelative = normalizePath(dirname($htmlRelative));
    $htmlContent = rewriteLinks($htmlContent, $pageDirRelative, $assetRouteMap, $assetFileMap, $assetFullUrlMap);
    $htmlContent = sanitizeExternalReferences($htmlContent, $pageDirRelative, $assetRouteMap, $assetFileMap, $assetFullUrlMap);
    $htmlContent = ensureCoreLocalScripts($htmlContent);
    $htmlContent = injectInternalOnlyRuntimeGuard($htmlContent);
    $htmlContent = removeBom($htmlContent);

    $targetPageDir = OUTPUT_PAGES_ROOT . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $pageDirRelative);
    ensureDir($targetPageDir);
    $targetPageFile = $targetPageDir . DIRECTORY_SEPARATOR . 'index.php';

    $phpWrapper = "<?php declare(strict_types=1); ?>\n" . $htmlContent;
    file_put_contents($targetPageFile, $phpWrapper);
}

echo "Build completed.\n";
echo "- Pages: " . count($htmlFiles) . PHP_EOL;
echo "- Dependencies: " . count($assetRouteMap) . PHP_EOL;

function rewriteLinks(string $html, string $pageDir, array $assetRouteMap, array $assetFileMap, array $assetFullUrlMap): string
{
    return preg_replace_callback(
        '/\b(href|src|content)=("|\')(.*?)\2/i',
        function (array $matches) use ($pageDir, $assetRouteMap, $assetFileMap, $assetFullUrlMap): string {
            $attr = $matches[1];
            $quote = $matches[2];
            $url = $matches[3];

            $rewritten = rewriteUrl($url, $pageDir, $assetRouteMap, $assetFileMap, $assetFullUrlMap);
            return $attr . '=' . $quote . $rewritten . $quote;
        },
        $html
    ) ?? $html;
}

function rewriteUrl(string $url, string $pageDir, array $assetRouteMap, array $assetFileMap, array $assetFullUrlMap): string
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
    $fullUrl = $path . $query;

    if (isset($assetFullUrlMap[$fullUrl])) {
        return $assetFullUrlMap[$fullUrl] . $fragment;
    }

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

/**
 * @return string[]
 */
function extractLocalRootAssetUrls(string $html): array
{
    $matches = [];
    preg_match_all('/\b(?:href|src|content)=("|\')(\/[^"\']+)\1/i', $html, $matches);
    if (!isset($matches[2]) || !is_array($matches[2])) {
        return [];
    }

    $urls = [];
    foreach ($matches[2] as $url) {
        if (
            str_starts_with($url, '/en/') ||
            str_starts_with($url, '/ar/') ||
            str_starts_with($url, '/fr/') ||
            str_starts_with($url, '/de/') ||
            str_starts_with($url, '/ru/') ||
            str_starts_with($url, '/zh-')
        ) {
            continue;
        }
        $urls[] = $url;
    }
    return array_values(array_unique($urls));
}

function buildDependencyTargetRelative(string $normalizedPath, string $query, array $typeMap): string
{
    $ext = strtolower(pathinfo($normalizedPath, PATHINFO_EXTENSION));
    $bucket = $typeMap[$ext] ?? 'vendor';

    $dir = normalizePath(dirname($normalizedPath));
    if ($dir === '.') {
        $dir = '';
    }
    $filename = pathinfo($normalizedPath, PATHINFO_FILENAME);
    $safeExt = $ext === '' ? 'bin' : $ext;

    $querySuffix = '';
    if ($query !== '') {
        $raw = ltrim($query, '?');
        $clean = preg_replace('/[^a-zA-Z0-9_-]+/', '-', $raw) ?? '';
        $clean = trim($clean, '-');
        if ($clean !== '') {
            $querySuffix = '-' . $clean;
        }
    }

    $base = $filename . $querySuffix . '.' . $safeExt;
    if ($dir === '') {
        return normalizePath($bucket . '/' . $base);
    }
    return normalizePath($bucket . '/' . $dir . '/' . $base);
}

function fetchRemoteAsset(string $url): ?string
{
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => 12,
            'ignore_errors' => true,
            'header' => "User-Agent: PHP Static Builder\r\n",
        ],
    ]);

    $content = @file_get_contents($url, false, $context);
    if (!is_string($content) || $content === '') {
        return null;
    }

    return $content;
}

function removeBom(string $content): string
{
    $bom = "\xEF\xBB\xBF";
    if (str_starts_with($content, $bom)) {
        return substr($content, 3);
    }
    return $content;
}

function sanitizeExternalReferences(string $html, string $pageDir, array $assetRouteMap, array $assetFileMap, array $assetFullUrlMap): string
{
    // Remove only known error-generating scripts for static mode.
    $html = preg_replace('/<script\b[^>]*\bsrc=("|\')[^"\']*(?:googletagmanager|hotjar|nr-spa|newrelic|googleapis\.com\/maps|digital-vouchers|utils-single|utils-matcher|vendor\/js\/window-onload|vendor\/js\/bootstrap-select|vendor\/js\/global-booking-modal|vendor\/js\/spabooking|vendor\/js\/global-homepage-booking-widget|vendor\/js\/dinebooking|vendor\/js\/individual-home|vendor\/js\/login)[^"\']*\1[^>]*>\s*<\/script>/i', '', $html) ?? $html;

    // Remove direct external asset includes.
    $html = preg_replace('/<script\b[^>]*\bsrc=("|\')https?:\/\/[^"\']+\1[^>]*>\s*<\/script>/i', '', $html) ?? $html;
    $html = preg_replace('/<link\b[^>]*\bhref=("|\')https?:\/\/[^"\']+\1[^>]*>/i', '', $html) ?? $html;
    $html = preg_replace('/<iframe\b[^>]*\bsrc=("|\')https?:\/\/[^"\']+\1[^>]*>\s*<\/iframe>/i', '', $html) ?? $html;

    // Remove preconnect/prefetch hints to external hosts.
    $html = preg_replace('/<link\b[^>]*\brel=("|\')(dns-prefetch|preconnect)\1[^>]*>/i', '', $html) ?? $html;

    $html = preg_replace_callback(
        '/\b(href|src|content)=("|\')(.*?)\2/i',
        function (array $matches) use ($pageDir, $assetRouteMap, $assetFileMap, $assetFullUrlMap): string {
            $attr = strtolower($matches[1]);
            $quote = $matches[2];
            $url = trim($matches[3]);

            if ($url === '') {
                return $matches[0];
            }

            if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://') || str_starts_with($url, '//')) {
                $normalized = $url;
                if (str_starts_with($normalized, '//')) {
                    $normalized = 'https:' . $normalized;
                }
                $parts = parse_url($normalized);
                $host = strtolower($parts['host'] ?? '');
                $path = $parts['path'] ?? '';
                $query = isset($parts['query']) ? ('?' . $parts['query']) : '';
                $fragment = isset($parts['fragment']) ? ('#' . $parts['fragment']) : '';

                if ($host === 'www.addresshotels.com' || $host === 'addresshotels.com') {
                    $localCandidate = rewriteUrl($path . $query . $fragment, $pageDir, $assetRouteMap, $assetFileMap, $assetFullUrlMap);
                    return $attr . '=' . $quote . $localCandidate . $quote;
                }

                if ($attr === 'href') {
                    return $attr . '=' . $quote . 'javascript:void(0);' . $quote;
                }
                return $attr . '=' . $quote . '' . $quote;
            }

            return $matches[0];
        },
        $html
    ) ?? $html;

    return $html;
}

function syncMissingWebfontsFromCss(): void
{
    $cssFiles = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(OUTPUT_DEPENDENCIES_ROOT, FilesystemIterator::SKIP_DOTS)
    );

    foreach ($cssFiles as $fileInfo) {
        if (!$fileInfo instanceof SplFileInfo || !$fileInfo->isFile()) {
            continue;
        }
        if (strtolower($fileInfo->getExtension()) !== 'css') {
            continue;
        }

        $cssPath = $fileInfo->getPathname();
        $cssContent = file_get_contents($cssPath);
        if (!is_string($cssContent) || $cssContent === '') {
            continue;
        }

        $matches = [];
        preg_match_all('/url\((["\']?)([^)"\']+)\1\)/i', $cssContent, $matches);
        if (!isset($matches[2]) || !is_array($matches[2])) {
            continue;
        }

        foreach ($matches[2] as $assetUrl) {
            $asset = trim($assetUrl);
            if ($asset === '' || str_starts_with($asset, 'data:') || str_starts_with($asset, 'http://') || str_starts_with($asset, 'https://') || str_starts_with($asset, '//')) {
                continue;
            }

            [$assetPath] = splitUrl($asset);
            $ext = strtolower(pathinfo($assetPath, PATHINFO_EXTENSION));
            if (!in_array($ext, ['woff', 'woff2', 'ttf', 'eot', 'otf', 'svg'], true)) {
                continue;
            }

            $localAbsolute = normalizePath(dirname($cssPath) . '/' . $assetPath);
            $localAbsolute = str_replace('/', DIRECTORY_SEPARATOR, $localAbsolute);
            if (is_file($localAbsolute)) {
                continue;
            }

            $rootCandidate = deriveLegacyRootPathFromDependencyPath($localAbsolute);
            if ($rootCandidate === null) {
                continue;
            }

            $content = fetchRemoteAsset('https://www.addresshotels.com' . $rootCandidate);
            if ($content === null) {
                continue;
            }

            ensureDir(dirname($localAbsolute));
            file_put_contents($localAbsolute, $content);
        }
    }
}

function deriveLegacyRootPathFromDependencyPath(string $localAbsolute): ?string
{
    $normalized = normalizePath(str_replace('\\', '/', $localAbsolute));
    $needle = normalizePath(str_replace('\\', '/', OUTPUT_DEPENDENCIES_ROOT)) . '/';
    if (!str_starts_with($normalized, $needle)) {
        return null;
    }

    $relativeToDeps = substr($normalized, strlen($needle));
    if (!is_string($relativeToDeps) || $relativeToDeps === '') {
        return null;
    }

    // remove dependency type prefix (css/js/img/fonts/media/docs/vendor)
    $parts = explode('/', $relativeToDeps);
    if (count($parts) < 2) {
        return null;
    }
    array_shift($parts);
    return '/' . implode('/', $parts);
}

function injectInternalOnlyRuntimeGuard(string $html): string
{
    $guard = <<<'HTML'
<script>
(function () {
  function isAllowed(url) {
    try {
      var u = new URL(url, window.location.origin);
      return u.origin === window.location.origin;
    } catch (e) {
      return true;
    }
  }

  // WPML legacy global used by inline theme scripts.
  if (typeof window.ICL === 'undefined') {
    window.ICL = 'en';
  }
  if (typeof window.ICL_LANGUAGE_CODE === 'undefined') {
    window.ICL_LANGUAGE_CODE = window.ICL;
  }
  if (typeof window.google === 'undefined') {
    window.google = {
      maps: {
        event: { addDomListener: function () {} },
        LatLng: function () {},
        MapTypeId: { ROADMAP: 'roadmap' },
        Map: function () {},
        MarkerImage: function () {},
        Size: function () {},
        Point: function () {},
        Marker: function () {},
        InfoWindow: function () {}
      }
    };
  }

  var originalFetch = window.fetch;
  if (typeof originalFetch === 'function') {
    window.fetch = function (input, init) {
      var url = typeof input === 'string' ? input : (input && input.url ? input.url : '');
      if (url && !isAllowed(url)) {
        return Promise.resolve(new Response('', { status: 204, statusText: 'No Content' }));
      }
      return originalFetch.apply(this, arguments);
    };
  }

  var originalOpen = XMLHttpRequest.prototype.open;
  var originalSend = XMLHttpRequest.prototype.send;
  XMLHttpRequest.prototype.open = function (method, url) {
    if (url && !isAllowed(url)) {
      this.__blockedExternal = true;
      this.__blockedExternalUrl = url;
      return originalOpen.call(this, method || 'GET', '/');
    }
    this.__blockedExternal = false;
    return originalOpen.apply(this, arguments);
  };
  XMLHttpRequest.prototype.send = function () {
    if (this.__blockedExternal) {
      return;
    }
    return originalSend.apply(this, arguments);
  };

  if (typeof navigator.sendBeacon === 'function') {
    var originalBeacon = navigator.sendBeacon.bind(navigator);
    navigator.sendBeacon = function (url, data) {
      if (url && !isAllowed(url)) {
        return false;
      }
      return originalBeacon(url, data);
    };
  }

  if (typeof window.WebSocket === 'function') {
    var OriginalWebSocket = window.WebSocket;
    window.WebSocket = function (url, protocols) {
      if (url && !isAllowed(url)) {
        return {
          close: function () {},
          send: function () {},
          readyState: 3
        };
      }
      return new OriginalWebSocket(url, protocols);
    };
  }

  if (typeof window.EventSource === 'function') {
    var OriginalEventSource = window.EventSource;
    window.EventSource = function (url, config) {
      if (url && !isAllowed(url)) {
        return {
          close: function () {},
          readyState: 2
        };
      }
      return new OriginalEventSource(url, config);
    };
  }
})();
</script>
HTML;

    if (stripos($html, '<head>') !== false) {
        return preg_replace('/<head>/i', '<head>' . "\n" . $guard, $html, 1) ?? $html;
    }

    return $guard . "\n" . $html;
}

function ensureCoreLocalScripts(string $html): string
{
    $hasJquery = (bool) preg_match('/id=("|\')jquery-js\1|jquery\.min\.js/i', $html);
    $needsJquery = (bool) preg_match('/vendor\/js\/(?:login|bootstrap-select|individual-home|jquery\.plugin|jquery\.datepick|dinebooking|spabooking)\.js|vendor\/js\/(?:bootstrap-select|jquery\.plugin)\.min\.js/i', $html);

    if (!$hasJquery && $needsJquery) {
        $jqueryTag = '<script type="text/javascript" src="/dependencies/js/wp-content/themes/emaar-projects/js/lib/jquery.min.js?ver=3.6.0" id="jquery-js"></script>' . "\n";

        // Prefer injecting before first script include.
        $updated = preg_replace('/<script\b/i', $jqueryTag . '<script', $html, 1);
        if (is_string($updated) && $updated !== '') {
            return $updated;
        }
        return $jqueryTag . $html;
    }

    return $html;
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
