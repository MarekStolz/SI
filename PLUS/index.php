<?php

namespace michal\demogame;

error_reporting(E_ALL);
define("APP_DIR", "app/");

spl_autoload_register(function (string $className) {
    $className = str_replace("michal\\demogame\\", "", $className);
    if (file_exists(APP_DIR . "$className.php")) {
        require APP_DIR . "$className.php";
    } else {
        die("Unable to load class $className.");
    }
});


$vampire = new Enemy(10, 0, 100, 20);
$spider = new Enemy(7, 5, 35, 15);
var_dump($vampire->getDistance($spider));
