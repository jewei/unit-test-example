<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// set_include_path(dirname(dirname(__FILE__)) . "/src" . PATH_SEPARATOR . get_include_path());

// spl_autoload_register(function ($class) {
//     if (strpos($class, '\\') !== false) {
//         include str_replace("\\", "/", $class) . '.php';
//     }
// });

include_once realpath(__DIR__ . '/../vendor/') . '/autoload.php';
