<?php
    namespace app\controllers;
    use app\models\mainModel;

    class userController extends mainModel {
        
        // Controlador para registrar un usuario
        public function registrarUsuarioControlador(){

            // Almacenando datos
            $nombre = $this->limpiarCadena($_POST['usuario_nombre']);
            $apellido = $this->limpiarCadena($_POST['usuario_apellido']);

            $usuario = $this->limpiarCadena($_POST['usuario_usuario']);
            $email = $this->limpiarCadena($_POST['usuario_email']);
            $clave1 = $this->limpiarCadena($_POST['usuario_clave_1']);
            $clave2 = $this->limpiarCadena($_POST['usuario_clave_2']);

            // verificando campos obligatorios
            if($nombre == "" || $apellido == "" || $usuario == "" || $clave1 == "" || $clave2 == ""){
                $alerta = [
                    "tipo" => "simple",
                    "titulo" => "Ocurrio un error inesperado",
                    "texto" => "No has llenado todos los campos que son obligatorios",
                    "icono" => "error"
                ];

                return json_encode($alerta);
                exit();
            }
            
        }

    }