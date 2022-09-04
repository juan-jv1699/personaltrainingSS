<?php
class dataBase{
    public static function connect(){
        $conexion = mysqli_connect("localhost", "root", "", "tienda_master") or die("Problemas con la conexión");
        return $conexion;
    }
}