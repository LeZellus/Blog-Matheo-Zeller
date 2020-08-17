<?php


ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
// $router = new \App\config\Router();
// $router->run();

return $this->view->render('index');
