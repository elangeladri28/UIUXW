<?php
require_once ("..\sql\models\Usuario.php");

$Usuario = $_GET["Usuario"];
$Email = $_GET["Email"];
$Contra = $_GET["Contra"];

$Username = new UsuarioModel();
$Username->insertar_usuario($Usuario, $Email, $Contra);

header('Location: index.php');
    die();