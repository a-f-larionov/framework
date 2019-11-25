<?php

/**
 * Конфигурационный файл.
 */

use App\Providers\EntityManagerProvider;
use App\Providers\RouterProvider;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\RouterInterface;

return [

    'entityManager' => [
        'driver' => 'pdo_mysql',
        'host' => getenv('DB_HOST', 'localhost'),
        'user' => getenv('DB_USER'),
        'password' => getenv('DB_PASSWORD'),
        'dbname' => getenv('DB_NAME'),
        'echoSQLLog' => getenv('ECHO_SQL_LOG', false),
    ],

    'providers' => [
        RouterInterface::class => RouterProvider::class,
        EntityManagerInterface::class => EntityManagerProvider::class,
    ],
];