<?php

require_once("..\sql\models\Producto.php");

$ProdName = $_POST["producto"];
$Categoria = $_POST["categoria"];

$ProdSelecc = new ProductosModel();
$resultados = $ProdSelecc->Mostrar_Seleccionado($ProdName, $Categoria);


echo json_encode($resultados);


?>