<?php
class usuariocontroler{

    public function index(){
        echo "Controlador Usuario, Accion index";
    }
    public function register(){
        require_once('views/usuario/register.php');
    }
    public function save(){
        if(isset($_POST)){
            var_dump($_POST);
        }
    }
}