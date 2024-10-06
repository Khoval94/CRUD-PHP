<?php

class ControladorInicio extends ControladorBase {
    public $requiereLogin = true;
    
    public function inicio(){
        $this->mostrarVista("inicio", "dashboard");
    }

    public function login (){
        echo"pantalla de inicio de sesión";
    }

    public function acercaDe(){
        $this->mostrarVista("inicio", "acercaDe");
    }
} 