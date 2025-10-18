<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

// Verifica se o arquivo de autoload do Composer existe
if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
} else {
    throw new RuntimeException('O autoload do Composer não foi encontrado. Execute `composer install` para instalar as dependências.');
}

// Inicializa o aplicativo
$app = require_once __DIR__.'/../bootstrap/app.php';

// Executa a aplicação
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

// Finaliza a aplicação
$kernel->terminate($request, $response);
