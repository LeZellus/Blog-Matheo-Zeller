<?php

namespace App\config;

use Exception;

class Router
{
    private $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function run()
    {
        $route = $this->request->getGet()->get('route');

        try {
            if (isset($route)) {
            } else {
            }
        } catch (Exception $e) {
        }
    }
}
