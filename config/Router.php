<?php

namespace App\config;

use Exception;

class Router
{
    public function run()
    {
        try {
            if (isset($_GET['route'])) {
            } else {
                require '../templates/home.php';
            }
        } catch (Exception $e) {
            echo 'Erreur';
        }
    }
}
