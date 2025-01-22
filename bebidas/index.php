<?php
    require_once "./config/app.php";

    require_once "./autoload.php";          // manda a llamar a los archivos de clase que va a tener esté sistema 

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

    <?php require_once "./app/views/inc/script.php"; ?>
</body>
</html>