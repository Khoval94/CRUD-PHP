<?php

class Aplicacion {
    private $nombreControlador;
    private $nombreAccion;
    private $carpetaRaiz;

    private $controlador;

    public function __construct($carpetaRaiz) {
        $this->carpetaRaiz = $carpetaRaiz;

    }

    public function redireccionar($controlador, $accion, $parametros = []){
        $url = ruta($controlador, $accion, $parametros);
        header('Location: ' . $url);
            exit();


    }

    public function cargarControlador(){
        $nombreRealControlador = "Controlador" . ucfirst($this->nombreControlador);
        $dirControlador = "{$this->carpetaRaiz}/Controladores/{$nombreRealControlador}.php";
        
        if (!realpath($dirControlador)){
            throw new Exception("No existe el archivo {$dirControlador}");

        }
        require_once "{$this->carpetaRaiz}/Clases/ConexionDB.php";
        require_once "{$this->carpetaRaiz}/Utilidades/funciones.php";
        require_once "{$this->carpetaRaiz}/Controladores/ControladorBase.php";
        require_once $dirControlador;

        if(!class_exists($nombreRealControlador)){
            throw new Exception("No existe el controlador {$nombreRealControlador}");
        }

        $this->controlador = new $nombreRealControlador($this);
        if($this->controlador->getRequiereLogin() && !isset($_SESSION['logueado'])){
            $this->redireccionar("acceso", "ingresar");

        }
    }


public function correrApp(){
    session__start();
    $this->nombreControlador = $_GET['controlador'] ?? 'inicio';
    $this->nombreAccion = $_GET['accion'] ?? 'inicio';
    $this->cargarControlador();
    if (!method_exists($this->controlador, $this->nombreAccion)) {
        throw new Exception("No existe la acción {$this->nombreAccion}");

    }
    call_user_func_array([$this->controlador, $this->nombreAccion], []);
}

public function getCarpetaRaiz() {
    return $this->getCarpetaRaiz;

}

}