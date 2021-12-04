<?php

require_once("..\sql\models\Producto.php");


$Productos = new ProductosModel();
$resultados = $Productos->MostrarUltimos();

echo json_encode($resultados);

// return $Categoria[$Categoria]?? null;

?>