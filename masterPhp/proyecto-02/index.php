<?php
require_once('autoload.php');
require_once('config/parameters.php');
require_once('views/layouts/header.php');
require_once('views/layouts/sidebar.php');

if(isset($_GET['controller'])){
    $controller_name = $_GET['controller'].'controler';
}
elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $controller_name = controler_default;

}
else {
    $error = new errorcontroler();
    $error->index();
    exit();
}
if(class_exists($controller_name)){
    $controller = new $controller_name();
    if(isset($_GET['action']) && method_exists($controller,$_GET['action'])){
        $action =  $_GET['action'];
        $controller->$action();
    }elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $default = action_default;
        $controller->$default();
    }
    else{
        $error = new errorcontroler();
        $error->index();
    }

}else {
    $error = new errorcontroler();
    $error->index();
}   

require_once('views/layouts/footer.php');
