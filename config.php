<?php
declare(strict_types=1);

function appEnv(string $key, string $default = ''): string
{
    $path = __DIR__ . '/.env';
    if (!is_file($path)) {
        return $default;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (!is_array($lines)) {
        return $default;
    }

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
            continue;
        }
        [$k, $v] = explode('=', $line, 2);
        if (trim($k) !== $key) {
            continue;
        }
        return trim($v, " \t\n\r\0\x0B\"'");
    }

    return $default;
}

function appCurrentLocale(): string
{
    $supported = ['it', 'en'];

    // 1) Explicit query parameter wins (useful for local previews)
    $queryLang = strtolower(trim((string)($_GET['lang'] ?? '')));
    if (in_array($queryLang, $supported, true)) {
        return $queryLang;
    }

    // 2) WPML cookie if available
    $cookieLang = strtolower(trim((string)($_COOKIE['wp-wpml_current_language'] ?? '')));
    if (in_array($cookieLang, $supported, true)) {
        return $cookieLang;
    }

    // 3) URL prefix fallback (/en/... or /it/...)
    $path = trim((string) parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
    $firstSegment = strtolower((string) strtok($path, '/'));
    if (in_array($firstSegment, $supported, true)) {
        return $firstSegment;
    }

    // Default locale for Sottovoce project
    return 'it';
}

function appLabels(?string $locale = null): array
{
    static $cache = [];

    $resolvedLocale = $locale !== null ? strtolower($locale) : appCurrentLocale();
    $resolvedLocale = in_array($resolvedLocale, ['it', 'en'], true) ? $resolvedLocale : 'it';

    if (isset($cache[$resolvedLocale])) {
        return $cache[$resolvedLocale];
    }

    $file = __DIR__ . '/translations/labels.' . $resolvedLocale . '.php';
    if (!is_file($file)) {
        $cache[$resolvedLocale] = [];
        return $cache[$resolvedLocale];
    }

    $labels = require $file;
    $cache[$resolvedLocale] = is_array($labels) ? $labels : [];

    return $cache[$resolvedLocale];
}

function label(string $key, string $fallback = '', ?string $locale = null): string
{
    $labels = appLabels($locale);
    if (array_key_exists($key, $labels) && is_string($labels[$key])) {
        return $labels[$key];
    }

    // Fallback to Italian catalog if key is missing in selected locale
    if (($locale === null || strtolower($locale) !== 'it')) {
        $itLabels = appLabels('it');
        if (array_key_exists($key, $itLabels) && is_string($itLabels[$key])) {
            return $itLabels[$key];
        }
    }

    return $fallback !== '' ? $fallback : $key;
}
