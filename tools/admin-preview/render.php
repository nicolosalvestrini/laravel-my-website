<?php

// Anteprima locale della sola grafica: non richiama controller, sessioni o database.
$root = dirname(__DIR__, 2);
require $root . '/vendor/autoload.php';
$app = require $root . '/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
$app['config']->set('app.url', 'http://127.0.0.1:8085');
$app['url']->forceRootUrl('http://127.0.0.1:8085');
$viewRoot = $root . '/resources/views/admin';
$output = __DIR__ . '/rendered';
if (!is_dir($output)) {
    mkdir($output, 0755, true);
}
$map = [];
$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($viewRoot));
foreach ($files as $file) {
    if (!$file->isFile() || !str_ends_with($file->getFilename(), '.blade.php')) {
        continue;
    }
    $relative = str_replace('\\', '/', substr($file->getPathname(), strlen($viewRoot) + 1));
    if (str_starts_with($relative, 'layouts/') || str_starts_with($relative, 'partials/')) {
        continue;
    }
    $view = 'admin.' . str_replace('/', '.', substr($relative, 0, -10));
    $url = '/admin/' . substr($relative, 0, -10);
    $url = preg_replace('~/index$~', '', $url);
    $url = preg_replace('~/show$~', '/1', $url);
    $url = preg_replace('~/edit$~', '/1/edit', $url);
    $url = str_replace('/admin/dashboard', '/admin', $url);
    $html = $app['view']->make($view)->render();
    $filename = str_replace('.', '-', $view) . '.html';
    file_put_contents($output . '/' . $filename, $html);
    $map[$url] = $filename;
    echo "OK $view\n";
}
file_put_contents($output . '/map.json', json_encode($map, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
echo count($map) . " pagine renderizzate senza dati del backend.\n";
