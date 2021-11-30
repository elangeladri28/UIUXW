<?php

    // class UsuarioModel{
    //     private $id_usuario;
    //     private $UsuarioNombre;
    //     private $Email;
    //     private $Contra;

    //     public function __construct($id_usuario, $UsuarioNombre, $Email, $Contra){
    //         $this->id_usuario = $id_usuario;
    //         $this->Username = $UsuarioNombre;
    //         $this->Correo = $Email;
    //         $this->Contra = $Contra;
    //     }

    //     public function setId($id_usuario){
    //         $this->id_usuario = $id_usuario;
    //     }

    //     public function getId(){
    //         return $this->id_usuario;
    //     }
        
    //     public function setUsuario($UsuarioNombre){
    //         $this->Username = $UsuarioNombre;
    //     }
        
    //     public function getUsuario(){
    //         return $this->Username;
    //     }

    //     public function setEmail($Email){
    //         $this->Correo = $Email;
    //     }

    //     public function getEmail(){
    //         return $this->Correo;
    //     }

    //     public function setContra($Contra){
    //         $this->Contra = $Contra;
    //     }

    //     public function getContra(){
    //         return $this->Contra;
    //     }

    // }

    class UsuarioModel {

        private $db;
        private $usuarios_model;
    
        public function __construct() {
            require_once '..\sql\config\db.php';
            $this->db = conectar::conexion();
            $this->usuarios_model = array();
        }
    
        public function insertar_usuario($Usuario, $correo, $contra) {
            $sql = "call NewUser(:Usuario, :correo, :contra)";
            $result = $this->db->prepare($sql);
            $result->execute(array(":Usuario" => $Usuario, ":correo" => $correo, ":contra" => $contra));
        }
        
        public function IniciarSesion($Usuario, $contra) {
            $this->usuarios_model = array();
            $sql = "call InicioSesion(:Usuario, :Contra)";
            $result = $this->db->prepare($sql);
            $result->execute(array(":Usuario" => $Usuario, ":Contra" => $contra));
            
            while ($filas = $result->fetch(PDO::FETCH_ASSOC)) {
                $this->usuarios_model[] = $filas;
            }
            
            return $this->usuarios_model;
        }
        
       }

?>