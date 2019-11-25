<?php

/**
 * Entry Point Фреймоврка.
 */
use App\App;
use Symfony\Component\HttpFoundation\Request;

/**
 * Автозлоадер from composer.
 */
require_once __DIR__ . '/../vendor/autoload.php';

$container = require_once __DIR__ . '/../bootstrap.php';

$app = App::create($container);

$request = Request::createFromGlobals();

$response = $app->handle($request);

$response->send();