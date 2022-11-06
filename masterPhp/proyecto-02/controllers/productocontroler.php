<?php
require_once('models/producto.php');
class productocontroler{

    public function index(){
        $producto = new producto();
        $productos = $producto->getRandom(6);
        require_once('views/producto/destacados.php');
    }
    public function view(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $producto= new Producto();
            $producto->setId($id);
            $pro = $producto->getOnce(); 
        }
        require_once 'views/producto/viewOne.php';
    }
    public function manage(){
        utils::isAdmin();

        $producto = new producto();
        $productos = $producto->getAll();

        require_once('views/producto/manage.php');
    }
    public function create(){
        utils::isAdmin();
        require_once("views/producto/create.php");
    }
    public function save(){
        utils::isAdmin();
        if(isset($_POST)){
            $category = isset($_POST['category'])? $_POST['category'] : false;
            $name = isset($_POST['name'])? $_POST['name'] : false;
            $description = isset($_POST['description'])? $_POST['description'] : false;
            $price = isset($_POST['price'])? $_POST['price'] : false;
            $stock = isset($_POST['stock'])? $_POST['stock'] : false;
            // $image = isset($_POST['image'])? $_POST['image'] : false;

            if($category && $name && $description && $price && $stock){
                $producto = new producto();
                $producto->setNombre($name);
                $producto->setDescripcion($description);
                $producto->setPrecio($price);
                $producto->setCategoria_id($category);
                $producto->setStock($stock);
                
                //guardar imagen
                if(isset($_FILES['image'])){
                    $file = $_FILES['image'];
                    $filename = $file['name'];
                    $mimetype = $file['type'];
    
                    if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif"){
                        if(!is_dir('uploads/images')){
                            mkdir('uploads/images', 0777,true);
                        }
                        move_uploaded_file($file['tmp_name'],'uploads/images/'.$filename);
                        $producto->setImagen($filename);
                    }
                }

                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $producto->setId($id);

                    $save = $producto->edit();
                } else {
                    $save = $producto->save();
                }


                if($save){
                    $_SESSION['product']="complete";
                }else {
                    $_SESSION['product']="failed";
                }
            }else{
                $_SESSION['product']="failed";
            }
        }else{
            $_SESSION['product']="failed";
        }
        header("location:".base_url."/?controller=producto&action=manage");
    }
    public function edit(){
        utils::isAdmin();
        if(isset($_GET['id'])){
            $edit = true;
            $producto= new Producto();
            $producto->setId($_GET['id']);
            $pro = $producto->getOnce(); 
            require_once 'views/producto/create.php';
        }else{
            header("location:".base_url."/?controller=producto&action=manage");
        }

    }
    public function delete(){
        utils::isAdmin();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $producto = new producto();
            $producto->setId($id);
            $image = $producto->getOnce();
            $name = $image->producto_image;
            $delete = $producto->delete();
            if(file_get_contents("uploads/images/$name") != null){
                unlink("uploads/images/$name");
            }
            if($delete){
                $_SESSION['delete'] = "complete";
            }else{
                $_SESSION['delete'] = "failed";
            }
        }else{
            $_SESSION['delete'] = "failed";
        }
        header("location:".base_url."/?controller=producto&action=manage");
    }
}//end class