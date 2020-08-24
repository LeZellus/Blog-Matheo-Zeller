<?php

namespace App\config;

use App\src\controller\FrontController;
use App\src\controller\ErrorController;
use Exception;

class Router
{
    private $frontController;
    private $errorController;
    private $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->errorController = new ErrorController();
    }

    public function run()
    {
        try {
            if (isset($_GET['route'])) {
                if ($_GET['route'] === 'article') {
                    $this->frontController->article($_GET['articleId']);
                } elseif($_GET['route'] === 'landing'){
                    return $this->frontController->landing();
                }elseif($_GET['route'] === 'register'){
                    $this->frontController->register($this->request->getPost());
                }
                $this->errorController->errorNotFound();
            }
            $this->frontController->home();
        } catch (Exception $e) {
            $this->errorController->errorServer();
        }
    }
}
