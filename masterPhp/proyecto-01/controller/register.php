<?php
    session_start();
    if(isset($_POST)){
        $name = isset($_POST['name']) ? $_POST['name'] : false;
        $last = isset($_POST['lastname']) ? $_POST['lastname'] : false;
        $mail = isset($_POST['email']) ? $_POST['email'] : false;
        $key = isset($_POST['password']) ? $_POST['password'] : false;
        $errores = array();
        $guardarUsuario = false;
        // verificar datos
            // nombre
        if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]/",$name)){
            $name_validate = true;
        }else{
            $name_validate = false;
            $errores['name']= "El nombre no es valido";
        }
            // apellido
        if(!empty($last) && !is_numeric($last) && !preg_match("/[0-9]/",$last)){
            $last_validate = true;
        }else{
            $last_validate = false;
            $errores['lastname']= "El apellido no es valido";
        }
            // email
        if(!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $mail_validate= true;
        }else{
            $mail_validate= false;
            $errores['email']= "Correo no valido";
        }
            // password
        if(!empty($key)){
            $key_validate = true;
        }else{
            $errores['password']="contraseña incorrecta";
        }
        // GUARDAR USUARIO
        if(sizeof($errores)==0){
            $guardarUsuario = true;
        }else{
            $_SESSION['errores']=$errores;
            header('location: ../index.php');
        }

   }
?>