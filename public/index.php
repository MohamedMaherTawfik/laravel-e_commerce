<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

require __DIR__ . '/../bootstrap/app.php';

$app = new \Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

$app->loadEnvironmentVariables();

$app->make(Kernel::class)->handle(
    $request = Request::capture()
)->send();