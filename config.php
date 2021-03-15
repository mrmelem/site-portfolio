<?php

session_start();

function myAutoLoad($class)
{
    if ($class == "Email" && file_exists('./src/class/email.php' && file_exists('./src/class/phpmailer/vendor/autoload.php'))) {
        try {
            include('.src/class/phpmailer/vendor/autoload.php');
            include('.src/class/email.php');
        } catch (Exception $e) {
            die("Classe Mailer não foi encontrada");
        }
    } else if (file_exists('./src/class/' . $class . '.php')) {
        include('./src/class/' . $class . '.php');
    } else {
        die("Classe:" . $class . " não foi encontrada");
    }
}

spl_autoload_register('myAutoLoad');

define('INCLUDE_PATH', '/site-portfolio/');
define('STYLES_PATH', INCLUDE_PATH . 'src/pages/');
include("./bin/keys.php");
new Email();
die();
