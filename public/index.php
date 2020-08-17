<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../config/dev.php';
require '../vendor/autoload.php';

try {
    if (isset($_GET['route'])) {
    } else {
        require '../templates/home.php';
    }
} catch (Exception $e) {
    echo 'Erreur';
}
