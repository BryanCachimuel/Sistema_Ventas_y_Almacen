<?php
    //echo __DIR__;  obtiene el directorio actual del archivo que se esta buscando

    // obtiene el nombre de las clases del sistena
    spl_autoload_register(function($clase){
       
        $archivo = __DIR__."/".$clase.".php";        // ruta completa del codigo de la clase que se va a usar
        $archivo = str_replace("\\","/",$archivo);  // remplaza / por esto \\

        if(is_file($archivo)){          // si existe el archivo mediante la ruta
            require_once $archivo;     // se obtiene todo el nombre de la ruta si existe el archivo
        }

    });