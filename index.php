<?php

include('./config.php');

$url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home';

include('./src/pages/defaults/header.php');
if(file_exists('./src/pages/'.$url.'.php')){
    include('./src/pages/'.$url.'.php');
}else{
    include('./src/pages/defaults/error-pnf.php');
}
include('./src/pages/defaults/footer.php');


