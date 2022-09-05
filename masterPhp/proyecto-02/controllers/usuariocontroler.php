<?php
require_once('models/usuario.php');
class usuariocontroler{

    public function index(){
        echo "Controlador Usuario, Accion index";
    }
    public function register(){
        require_once('views/usuario/register.php');
    }
    public function save(){
        if(isset($_POST)){
            $name = isset($_POST['name'])? $_POST['name'] : false;
            $lastname = isset($_POST['name'])? $_POST['lastname'] : false;
            $email = isset($_POST['name'])? $_POST['email'] : false;
            $password=isset($_POST['name'])? $_POST['password'] : false;
            
            if($name && $lastname && $password && $email){
                $usuario = new usuario();
                $usuario->setNombre($name);
                $usuario->setApellidos($lastname);
                $usuario->setEmail($email);
                $usuario->setUserkey($password);
                $save = $usuario->save();
            }

            if($save){
                $_SESSION['register']='complete';
            }else {
                $_SESSION['register']='failed';
            }
        }else {    
            $_SESSION['register']="failed";
        }
        header("location:".base_url."/?controller=usuario&action=register");
    }
    public function login(){
        if(isset($_POST)){
            $usuario = new usuario();
            $usuario->setEmail($_POST['email']);
            $usuario->setUserkey($_POST['password']);
            $identity = $usuario->login();

            if($identity && is_object($identity)){
                $_SESSION['identity'] = $identity;
                if($identity->rol == 'admin'){
                    $_SESSION['admin'] = true;
                }
            }else{
                $_SESSION['error_login'] = "identificacion fallida";
            }
        }
        header("location:".base_url);
    }
    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        header("location:".base_url);
    }
} //endclass