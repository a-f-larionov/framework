<?php

namespace App\Providers\Interfaces;

/**
 * Interface ProviderInterface
 */
interface ProviderInterface
{
    /**
     * @return mixed
     */
    public static function create();
}