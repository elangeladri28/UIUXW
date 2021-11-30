<?php

class ProductosModel{

    private $db;
    private $productos_model;

    public function __construct() {
        require_once '..\sql\config\db.php';
        $this->db = conectar::conexion();
        $this->productos_model = array();
    }

    public function Mostrar_Productos($Categoria){
        $sql = "call MostrarProductos(:Categoria)";
        $result = $this->db->prepare($sql);
        $result->execute(array(":Categoria" => $Categoria));

        while ($filas = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->productos_model[] = $filas;
        }
        return $this->productos_model;

    }
}

?>
