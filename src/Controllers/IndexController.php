<?php

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class IndexControllers
 */
class IndexController extends BaseController
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->responseWithSuccess("Hello, world!");
    }
}