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
