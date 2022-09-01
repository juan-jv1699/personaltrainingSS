<?php
require_once('autoload.php');
require_once('config/parameters.php');
require_once('views/layouts/header.php');
require_once('views/layouts/sidebar.php');

if(isset($_GET['controller'])){
    $controller_name = $_GET['controller'].'controler';
}
else {
    echo "La pagina que buscas no existe 1";
    exit();
}
if(class_exists($controller_name)){
    $controller = new $controller_name();
    if(isset($_GET['action']) && method_exists($controller,$_GET['action'])){
        $action =  $_GET['action'];
        $controller->$action();
    }
    else{
        echo "la pagina que buscas no existe 2";
    }

}else {
    echo "la pagina que buscas no existe 3";
}   

require_once('views/layouts/footer.php');
