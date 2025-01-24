<?php

    namespace app\models;
    use \PDO;            // le decimos al modelo que debe usar para la conexión a la bdd la clase PDO

    if(file_exists(__DIR__."/../../config/server.php")){
        require_once __DIR__."/../../config/server.php";
    }

    class mainModel {

        private $server = DB_SERVER;
        private $db = DB_NAME;
        private $user = DB_USER;
        private $pass = DB_PASS;

        protected function conectar(){
            $conexion = new PDO("mysql:host=".$this->server.";dbname=".$this->db, $this->user, $this->pass);
            $conexion->exec("SET CHARACTER SET utf8");          // le decimos a que solo se van a utilizar caracteres de tipo utf8
            return $conexion;
        }

        protected function ejecutarConsultas($consulta){
            $sql = $this->conectar()->prepare($consulta);
            $sql->execute();
            return $sql;
        }

    }