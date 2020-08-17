<?php

session_start();
$router = new \App\config\Router();
$router->run();
