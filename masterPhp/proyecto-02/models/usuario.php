<?php
class usuario{
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $userkey;
    private $rol;
    private $userimage;
    private $db;
    
    public function __construct()
    {
        $this->db = dataBase::connect();
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $this->db->real_escape_string($id);

    }
 
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);

    }
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $this->db->real_escape_string($apellidos);

    }
 
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);

    }

    public function getUserkey()
    // PASSWORD_DEFAULT
    // password_hash($this->db->real_escape_string(), PASSWORD_BCRYPT, ['cost' => 4])
    {
        return  password_hash($this->db->real_escape_string($this->userkey), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function setUserkey($userkey)
    {
        $this->userkey = $userkey;

    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $this->db->real_escape_string($rol);

    }

    public function getUserimage()
    {
        return $this->userimage;
    }

    public function setUserimage($userimage)
    {
        $this->userimage = $this->db->real_escape_string($userimage);

    }

    public function save() {
        $sql = "INSERT INTO usuarios VALUES(null,'{$this->getNombre()}','{$this->getApellidos()}','{$this->getEmail()}','{$this->getUserkey()}','user',null) ";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }   
    
    public function login(){

        $email = $this->email;
        $password = $this->userkey;
        $result = false;
        $sql = "SELECT * FROM usuarios WHERE email='$email'";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1){
            $usuario = $login->fetch_object();
            $verify = password_verify($password,$usuario->userKey);

            if($verify){
                $result = $usuario;
            }
        }
        return $result;
    }
   
}//end model