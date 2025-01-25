<?php
    namespace app\models;  // ruta donde se encuenta almacenado este modelo

    class viewsModel {

        protected function obtenerVistasModelo($vista){
            $listaBlanca = ["dashboard","userNew","userList","userSearch","userUpdate","userPhoto","logoOut"];      // tendra todas las palabras que se van a permitir en la url

            if(in_array($vista, $listaBlanca)){
                // verifica si la vista se encuentra en el directorio content
                if(is_file("./app/views/content/".$vista."-view.php")){
                    $contenido = "./app/views/content/".$vista."-view.php";
                }
                else{
                    $contenido = "404"; // si no se encuentra la página nos redirigue hacia la vista 404
                }
            }
            // si desde el controlador se elegi ya sea la vista de index o login me presente la vista de login
            elseif($vista == "login" || $vista == "index"){
                $contenido = "login";
            }
            else{
                $contenido = "404";
            }

            return $contenido;
        }

    }