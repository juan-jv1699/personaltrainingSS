<?php
class dataBase{
    public static function connect(){
        $conexion = mysqli_connect("localhost", "root", "", "tienda_master") or die("Problemas con la conexión");
        $conexion->query("SET NAMES 'utf 8");
        return $conexion;
    }
}