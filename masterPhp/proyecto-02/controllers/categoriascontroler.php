<?php
require_once ('models/categoria.php');
require_once ('models/producto.php');
class categoriascontroler{

    public function index(){
        $categoria = new categoria();
        $categorias = $categoria->getAll();
        require_once('views/categoria/index.php');
    }
    public function viweCtg(){
        if(isset($_GET['id'])){
            $id= $_GET['id'];
            // se cosnigue la categoria
            $categoria = new categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();
            // conseguir producto
            $producto = new producto();
            $producto->setCategoria_id($id);
            $productos = $producto->getAllCategory(); 
        }
        require_once('views/categoria/view.php');
    }
    public function create(){
        utils::isAdmin();
        require_once('views/categoria/crear.php');
    }
    public function save(){
        $admin = utils::isAdmin();

        if(isset($_POST) && $_POST['name']){
            $categoria = new categoria();
            $categoria->setNombre($_POST['name']);
            $save = $categoria->save();
        }
        header("location:".base_url."/?controller=categorias&action=index");

    }
}