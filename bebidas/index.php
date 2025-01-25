<?php
    require_once "./config/app.php";

    require_once "./autoload.php";          // manda a llamar a los archivos de clase que va a tener esté sistema 

    require_once "./app/views/inc/session_start.php";    // archivo de inicio de sesión 
    
    if(isset($_GET['views'])){
        
       $url = explode("/",$_GET['views']);       // se separán los valores de las urls del proyecto
       
       
    }else{
       
        $url = ["login"];

    }
   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once "./app/views/inc/head.php"; ?>
</head>
<body>

    <?php 
        use app\controllers\viewsController;

        $viewsController = new viewsController(); // se instancia la clase para poder tener acceso a sus métodos
        $vista = $viewsController->obtenerVistasControlador($url[0]);   // accede a la posición cero de la url del navegador

        if($vista == "login" || $vista == "404"){
           require_once "./app/views/content/".$vista."-view.php";
        } 
        else{
            require_once "./app/views/inc/navbar.php";
            require_once $vista;
        }
        

        require_once "./app/views/inc/script.php"; 
    ?>
</body>
</html>