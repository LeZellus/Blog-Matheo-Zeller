<?php

namespace App\config;

use App\src\controller\FrontController;
use Exception;

class Router
{
    private $frontController;

    public function __construct()
    {
        $this->frontController = new FrontController();
    }

    public function run()
    {
        try {
            if (isset($_GET['route'])) {
            }
            $this->frontController->home();
        } catch (Exception $e) {
            echo 'Erreur';
        }
    }
}
