<?php
    function mostrarError($errores,$campo){
        $alert = "";
        if(isset($errores[$campo]) && !empty($campo)){
            $alert = "<div class='alert'>$errores[$campo]</div>";
        }
        return $alert;
    }

    function borrarErrores(){
        $_SESSION['errores']=null;
        $borrado = session_unset();
        return $borrado;
    }
?>