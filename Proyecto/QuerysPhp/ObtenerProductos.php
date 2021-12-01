<?php

require_once("..\sql\models\Producto.php");

// $ProdName = $_GET["Producto"];
// $Precio = $_GET["Precio"];
// $Descripcion = $_GET["Descripcion"];
$Categoria = $_GET["Categoria"];
// $Imagen = $_GET["Imagen"];

$Productos = new ProductosModel();
$resultados = $Productos->Mostrar_Productos($Categoria);

echo json_encode($resultados);

// return $Categoria[$Categoria]?? null;

?>