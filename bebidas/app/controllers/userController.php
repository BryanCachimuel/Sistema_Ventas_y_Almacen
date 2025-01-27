<?php
    namespace app\controllers;
    use app\models\mainModel;

    class userController extends mainModel {
        
        // Controlador para registrar un usuario
        public function registrarUsuarioControlador(){

            // Almacenando datos
            $nombre=$this->limpiarCadena($_POST['usuario_nombre']);
		    $apellido=$this->limpiarCadena($_POST['usuario_apellido']);

		    $usuario=$this->limpiarCadena($_POST['usuario_usuario']);
		    $email=$this->limpiarCadena($_POST['usuario_email']);
		    $clave1=$this->limpiarCadena($_POST['usuario_clave_1']);
		    $clave2=$this->limpiarCadena($_POST['usuario_clave_2']);

            // verificando campos obligatorios
            if($nombre=="" || $apellido=="" || $usuario=="" || $clave1=="" || $clave2==""){
		    	$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"No has llenado todos los campos que son obligatorios",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
		    }

			// Verificando la integridad de los datos
			if($this->verificarDatos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$nombre)){
				$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"El Nombre no coincide con el formato solicitado",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
			}

			if($this->verificarDatos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}",$apellido)){
				$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"El Apellido no coincide con el formato solicitado",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
			}

			if($this->verificarDatos("[a-zA-Z0-9]{4,20}",$usuario)){
				$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"El Usuario no coincide con el formato solicitado",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
			}

			if($this->verificarDatos("[a-zA-Z0-9$@.-]{7,100}",$clave1) || $this->verificarDatos("[a-zA-Z0-9$@.-]{7,100}",$clave2)){
		    	$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"Las calves no coinciden con el formato solicitado",
					"icono"=>"error"
				];
				return json_encode($alerta);
		        exit();
		    }

			// Verificando email
			if($email != ""){
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					$check_email = $this->ejecutarConsultas("SELECT usuario_email FROM usuario WHERE usuario_email='$email'");

					if($check_email->rowCount() > 0){
						$alerta=[
							"tipo"=>"simple",
							"titulo"=>"Ocurrió un error inesperado",
							"texto"=>"El Email que acaba de ingresar ya se encuentra registrado",
							"icono"=>"error"
						];
						return json_encode($alerta);
						exit();
					}
				}
				else{
					$alerta=[
						"tipo"=>"simple",
						"titulo"=>"Ocurrió un error inesperado",
						"texto"=>"Ha ingresado un email no valido",
						"icono"=>"error"
					];
					return json_encode($alerta);
					exit();
				}
			}

			// Verificando claves
			if($clave1 != $clave2){
				$alerta=[
					"tipo"=>"simple",
					"titulo"=>"Ocurrió un error inesperado",
					"texto"=>"Las contraseñas que acaba de ingresar no coinciden, por favor verifique e intente nuevamente",
					"icono"=>"error"
				];
				return json_encode($alerta);
				exit();
			}else{
				$clave=password_hash($clave1,PASSWORD_BCRYPT,["cost"=>10]);
            }
        }

    }