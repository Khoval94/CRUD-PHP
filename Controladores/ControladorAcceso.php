<?php

class ControladorAcceso extends ControladorBase {

    public function ingresar() {
        if(isset($_POST['btn_login'])) {

            $email = $_POST['email'] ?? '';
            $contrasena = $_POST['contrasena'] ?? '';
            $sql = "SELECT * FROM usuarios WHERE " . " email='{$email}' " . " AND contrasena= '{$contrasena}'";
            $resultado = ConexionDB::get()->query($sql);

            $usuarioEncontrado = $resultado[0] ?? false;

            if ($usuarioEncontrado !== false && !is_null($usuarioEncontrado)) {
                $_SESSION['logueado'] = true;
                $_SESSION['id_usuario'] = $usuarioEncontrado['id'];
                $_SESSION['nombre'] = $usuarioEncontrado['nombre'];
                $_SESSION['email'] = $usuarioEncontrado['email'];
                $this->app->redireccionar("inicio", "inicio");

            }

        }        
        $this->plantilla = "vacia";
        $this->mostrarVista("acceso", "ingresar");

    }
    public function salir(){
        session_destroy();
        $this->app->redireccionar("acceso" , "ingresar");
    }
}