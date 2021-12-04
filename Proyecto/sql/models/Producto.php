<?php

class ProductosModel
{

    private $db;
    private $productos_model;

    public function __construct()
    {
        require_once '..\sql\config\db.php';
        $this->db = conectar::conexion();
        $this->productos_model = array();
    }

    public function Mostrar_Productos($Categoria)
    {
        $this->productos_model = array();;
        $sql = "call MostrarProductos(:Categoria)";
        $result = $this->db->prepare($sql);
        $result->execute(array(":Categoria" => $Categoria));

        while ($filas = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->productos_model[] = $filas;
        }
        return $this->productos_model;
    }

    public function Mostrar_Seleccionado($Producto, $Categoria)
    {

        $this->productos_model = array();;
        $sql = "call Mostrar_Seleccionado(:Producto, :Categoria)";
        $result = $this->db->prepare($sql);
        $result->execute(array(":Producto" => $Producto, ":Categoria" => $Categoria));

        while ($filas = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->productos_model[] = $filas;
        }
        return $this->productos_model;
    }

    public function MostrarUltimos()
    {
        
        $this->productos_model = array();;
        $sql = "call MostrarUltimos";
        $result = $this->db->prepare($sql);
        $result->execute(array());

        while ($filas = $result->fetch(PDO::FETCH_ASSOC)) {
            $this->productos_model[] = $filas;
        }
        return $this->productos_model;

    }
}
