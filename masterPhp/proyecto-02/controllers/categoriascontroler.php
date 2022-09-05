<?php
require_once ('models/categoria.php');
class categoriascontroler{

    public function index(){
        $categoria = new categoria();
        $categorias = $categoria->getAll();
        require_once('views/categoria/index.php');
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