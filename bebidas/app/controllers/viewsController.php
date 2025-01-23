<?php
    namespace app\controllers;
    use app\models\viewsModel;

    // este controlador extiende el modelo viewsModel
    class viewsController extends viewsModel{

        // controlador para controlar todas las vistas del sistema
        public function obtenerVistasControlador($vista){
            if($vista != ""){   // verificar que la vista no venga vacía
                $respuesta = $this->obtenerVistasModelo($vista);
            }
            else{
                $respuesta = "login";
            }

            return $respuesta;
        }
    }