<?php

session_start();

function myAutoLoad($class)
{
    echo $class;
    if (file_exists('./src/class/' . $class . '.php')) {
        include('./src/class/' . $class . '.php');
    } else {
        die("Classe:" . $class . " não foi encontrada");
    }
}

spl_autoload_register('myAutoLoad');

define('INCLUDE_PATH', '/site-portfolio/');
define('STYLES_PATH', INCLUDE_PATH . 'src/pages/');
define('HOST', 'localhost');
define('DB', 'db_portfolio');
define('USER', 'root');
define('PASS', '');
