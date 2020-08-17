<?php

require '../vendor/autoload.php';

try {
    if (isset($_GET['route'])) {
    } else {
        require '../templates/home.php';
    }
} catch (Exception $e) {
    echo 'Erreur';
}
