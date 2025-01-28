<?php

namespace app\controllers;

use app\models\mainModel;

class loginController extends mainModel
{

    //controlador para inicio de sesión
    public function iniciarSesionControlador()
    {

        // Almacenando datos
        $usuario = $this->limpiarCadena($_POST['login_usuario']);
        $clave = $this->limpiarCadena($_POST['login_clave']);

        if ($usuario == "" || $clave == "") {
            echo "
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Ocurrio un error inesperado',
                        text: 'No ha llenado todos los campos que son obligatorios',
                        confirmButtonText: 'Aceptar',
                    });
                </script>
            ";
        }
        else{
            // verificando la integridad de los datos
            if($this->verificarDatos("[a-zA-Z0-9]{4,20}", $usuario)){
                echo "
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Ocurrio un error inesperado',
                            text: 'El Usuario no coincide con el formato solicitado',
                            confirmButtonText: 'Aceptar',
                        });
                    </script>
                ";
            }
            else{
                if($this->verificarDatos("[a-zA-Z0-9$@.-]{7,100}", $clave)){
                    echo "
                    <script>
                        Swal.fire({
                            icon: 'error',
                            title: 'Ocurrio un error inesperado',
                            text: 'La Clave no coincide con el formato solicitado',
                            confirmButtonText: 'Aceptar',
                        });
                    </script>
                ";
                }
                else{

                }
            }
        }
    }
}
