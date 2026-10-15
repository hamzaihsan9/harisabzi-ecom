<?php

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

$publicFile = __DIR__.'/public'.$uri;

if ($uri !== '/' && is_file($publicFile)) {
    $extension = strtolower(pathinfo($publicFile, PATHINFO_EXTENSION));
    $mimes = [
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
        'svg' => 'image/svg+xml',
        'webp' => 'image/webp',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'ico' => 'image/x-icon',
    ];
    if (isset($mimes[$extension])) {
        header('Content-Type: '.$mimes[$extension]);
        header('Content-Length: '.filesize($publicFile));
        readfile($publicFile);
        exit;
    }
    return false;
}

require_once __DIR__.'/public/index.php';
