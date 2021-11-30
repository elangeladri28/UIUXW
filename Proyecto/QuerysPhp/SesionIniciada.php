<?php

require_once("..\sql\models\Usuario.php");

$Usuario = $_GET["Usuario"];
$Contra = $_GET["Contra"];

$Username = new UsuarioModel();
$resultados = $Username->IniciarSesion($Usuario, $Contra);

// foreach ($usuario_logueado as $renglon) { foreach ($renglon as $columna => $valor) { 
//     if ($columna == "Id_User" && $valor != null) {  $id = $valor; }
//     if ($columna == "Username" && $valor != null) {  $User = $valor; }
//     if ($columna == "Email" && $valor != null) {  $Email = $valor; }
//     if ($columna == "Contraseña" && $valor != null) {  $Contra = $valor; }
//     if ($columna == "Tipo" && $valor != null) {  $Tipo = $valor; }
//     } }


// foreach ($resultados as $renglon) {
//     $UsuarioActivo = $renglon;
// }

session_start();
$_SESSION["UserAct"] = $resultados;

// var_dump($resultados);
header('Location: ../php/index.php');

