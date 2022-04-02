<?php

namespace marek\car;

error_reporting(E_ALL);
define("APP_DIR", "app/");

spl_autoload_register(function (string $className) {
    $className = str_replace("marek\car", "", $className);
    if (file_exists(APP_DIR . "$className.php")) {
        require APP_DIR . "$className.php";
    } else {
        die("Unable to load class $className.");
    }
});

$Audi = new vehicle(0, 0, 0, 0);