<?php

namespace App\Providers;

use ProviderInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Routing\Loader\PhpFileLoader;
use Symfony\Component\Routing\Router;

/**
 * Class RouterProvider
 * @package App\Providers
 */
class RouterProvider implements ProviderInterface
{
    /**
     * @return Router
     */
    public static function create(): Router
    {
        $fileLocator = new FileLocator([__DIR__ . '/']);
        $loader = new PhpFileLoader($fileLocator);
        $router = new Router($loader, __DIR__ . '/routes.php');
        return $router;
    }
}