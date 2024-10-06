<?php

require_once "./Clases/ConexionDB.php";

#$db = new ConexionDB();
#$db->conectar();
#$resultado = $db->query("SELECT * FROM usuarios");

#$resultado = ConexionDB::get()->query("SELECT * FROM usuarios");
#$otroResultado = ConexionDB::get()->query("SELECT * FROM usuarios");
#var_dump();

/*$datos = [
    'nombre' => 'Peranito',
    'email' => 'peranito@gmail.com',
    'constrasena' => '123456'
];

$resultado = ConexionDB::get()->insertar("usuarios", $datos);
var_dump($resultado);
*/

/*
$idAEditar = 4;
$datosAModificar = [
    'nombre' => 'USUARIO ACTUALIZADO',
    'email' => 'emailactualizado@gmail.com',
    'contrasena' => '111111',
];
$resultado = ConexionDB::get()->actualizar("usuarios", $idAEditar, $datosAModificar);
*/

$idAEliminar = 7;
$resultado = ConexionDB::get()->eliminar("usuarios", $idAEliminar);
var_dump($resultado);

