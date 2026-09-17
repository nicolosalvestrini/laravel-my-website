<?php

// Serve esclusivamente le pagine statiche prodotte da render.php.
// Questo router è uno strumento locale di anteprima, non una rotta dell'applicazione.
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$root = dirname(__DIR__, 2);
if (preg_match('~^/admin-ui/[a-zA-Z0-9_./-]+$~', $url)) {
    $asset = realpath($root . '/public' . $url);
    $allowed = realpath($root . '/public/admin-ui') . DIRECTORY_SEPARATOR;
    if ($asset && str_starts_with($asset, $allowed) && is_file($asset)) {
        $mime = ['css' => 'text/css', 'js' => 'text/javascript', 'svg' => 'image/svg+xml'];
        header('Content-Type: ' . ($mime[pathinfo($asset, PATHINFO_EXTENSION)] ?? 'text/plain'));
        readfile($asset);
        return;
    }
}
$map = json_decode(file_get_contents(__DIR__ . '/rendered/map.json'), true);
if ($url === '/') {
    header('Location: /admin');
    return;
}
if (isset($map[$url])) {
    header('Content-Type: text/html; charset=UTF-8');
    readfile(__DIR__ . '/rendered/' . $map[$url]);
    return;
}
http_response_code(404);
echo 'Anteprima non disponibile.';
