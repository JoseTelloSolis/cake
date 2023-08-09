<?php

class Acceso{

	private $user;
	private $pass;

	/*-----------------------------------------------*/
	//FUNCIONES GENERICAS

	public function login(){
		try{
			if(!empty($_POST['user']) and !empty($_POST['pass'])){
				$db = new Conexion();
				$this->user = $db->real_escape_string($_POST['user']);	
				$this->pass = md5($_POST['pass']);

				//1 admin - 2 cliente
				$sql = $db->query("SELECT * FROM usuarios WHERE user='$this->user' AND pass='$this->pass';");

				if($db->rows($sql) > 0){
					//si un dato coincide, login
					$datos = $db->recorrer($sql);
					$_SESSION['id'] = $datos['id'];
					$_SESSION['user'] = $datos['user'];

					echo 1; // 1 = conexion exitosa
				}
				else{
					//sino, mensaje de error
					throw new Exception(2); // 2 = conexion fallida
				}

				$db->liberar($sql);
				$db->close();
			}
			else{
				throw new Exception('Error: Datos vacios.');
			}	
		}
		catch(Exception $login){
			echo $login->getMessage();
		}
	}

	public function eliminar(){
		try{
			$db = new Conexion();

			$tabla = $_POST['tabla'];
			$id = $_POST['id'];

			$sql = $db->query("DELETE FROM $tabla WHERE id=$id");

			if($tabla == 'categoria'){
				$db->query("DELETE FROM categoria_lang WHERE id_categoria=$id");
			}

			if($tabla == 'noticias'){				   
				$db->query("DELETE FROM imagenes_noticias WHERE id_noticia=$id");
			}

			if($tabla == 'imagenes_noticias'){				   
				unlink($_POST['imagen']);
			}

			$db->close();	

			echo '1';
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function checkPortada(){
		try{
			$db = new Conexion();

			$tabla = $_POST['tabla'];
			$id = $_POST['id'];
			$id_producto = $_POST['id_producto'];

			if($tabla == 'productos_imagenes'){
				$db->query("UPDATE productos_imagenes SET portada=0 WHERE id_producto=$id_producto;");
				$db->query("UPDATE productos_imagenes SET portada=1 WHERE id=$id;");
			}

			$db->close();	

			echo '1';
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function cambiarPass(){
		try{
			$db = new Conexion();

			$password_old = $_POST['password_old'];	
			$password_new = $_POST['password_new'];
			$password_new_confirm = $_POST['password_new_confirm'];

			$password_bd = '';

			$user =  $_SESSION['user'];

			$sql = $db->query("SELECT pass FROM usuarios WHERE user='$user';");

			if($db->rows($sql) > 0){
				//si un dato coincide
				$datos = $db->recorrer($sql);
				
				$password_bd = $datos['pass'];

				//return $password_bd;

				if($password_bd == md5($password_old)){
					$sql2 = $db->query("UPDATE usuarios SET pass='".md5($password_new)."' WHERE user='$user';");
					echo 1;
				}
				else{
					throw new Exception(2); // 2 = pass no coincide
				}
			}
			else{
				//sino, mensaje de error
				throw new Exception(2); // 2 = conexion fallida
			}

			$db->liberar($sql);
			$db->close();

		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function enviarEmail(){
		try{
			$email_contacto = $_POST['email_contacto'];	

			$nombre = htmlentities($_POST['nombre']);
			$email = $_POST['email'];
			$mensaje = htmlentities($_POST['mensaje']);

			$para  = $email_contacto;

			//titulo
			$titulo = 'Contacto - web';

			//mensaje
			$mensajeHTML = "
				<style type='text/css'>
					.tg  {border-collapse:collapse;border-spacing:0;border:1px solid #333;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
					.tg .tg-ds4c{background-color:#000000;color:#ffffff;vertical-align:top}
					.tg .tg-yw4l{vertical-align:top}
				</style>
				<table class='tg'>
					<tr>
						<td class='tg-yw4l'><strong>Nombre:</strong></td>
						<td class='tg-yw4l'>$nombre</td>
					</tr>
					<tr>
						<td class='tg-yw4l'><strong>Email:</strong></td>
						<td class='tg-yw4l'>$email</td>
					</tr>
					<tr>
						<td class='tg-yw4l' colspan='2'>$mensaje</td>
					</tr>
				</table>
			";

			// Para enviar un correo HTML, debe establecerse la cabecera Content-type
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Cabeceras adicionales
			$cabeceras .= "To: $para" . "\r\n";
			$cabeceras .= "From: Contacto - web <$email>" . "\r\n";

			// Enviarlo
			if(mail($para, $titulo, $mensajeHTML, $cabeceras)){
				echo '1';
			}
			else{
				throw new Exception(2);
			}
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function enviarEvento(){
		try{
			$email_contacto = $_POST['email_contacto'];	

			$nombre = htmlentities($_POST['nombre']);
			$telefono = $_POST['telefono'];
			$email = $_POST['email'];
			$participantes = $_POST['participantes'];
			$mensaje = htmlentities($_POST['mensaje']);

			$para  = $email_contacto;

			//titulo
			$titulo = 'Evento - solicitud';

			//mensaje
			$mensajeHTML = "
				<style type='text/css'>
					.tg  {border-collapse:collapse;border-spacing:0;border:1px solid #333;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
					.tg .tg-ds4c{background-color:#000000;color:#ffffff;vertical-align:top}
					.tg .tg-yw4l{vertical-align:top}
				</style>
				<table class='tg'>
					<tr>
						<td class='tg-yw4l'><strong>Nombre:</strong></td>
						<td class='tg-yw4l'>$nombre</td>
					</tr>
					<tr>
						<td class='tg-yw4l'><strong>Telefono:</strong></td>
						<td class='tg-yw4l'>$telefono</td>
					</tr>
					<tr>
						<td class='tg-yw4l'><strong>Email:</strong></td>
						<td class='tg-yw4l'>$email</td>
					</tr>
					<tr>
						<td class='tg-yw4l'><strong>Cantidad Participantes:</strong></td>
						<td class='tg-yw4l'>$participantes</td>
					</tr>
					<tr>
						<td class='tg-yw4l' colspan='2'>$mensaje</td>
					</tr>
				</table>
			";

			// Para enviar un correo HTML, debe establecerse la cabecera Content-type
			$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// Cabeceras adicionales
			$cabeceras .= "To: $para" . "\r\n";
			$cabeceras .= "From: Evento - solicitud <$email>" . "\r\n";

			// Enviarlo
			if(mail($para, $titulo, $mensajeHTML, $cabeceras)){
				echo '1';
			}
			else{
				throw new Exception(2);
			}
			
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}
		
	public function ordenar(){
		try{
			$db = new Conexion();

			$listado = $_POST['listado'];
			$tabla = $_POST['tabla'];

		    foreach ($listado as $item) {
		    	$item = str_replace('\\', '', $item);
		        $dato = json_decode($item);
		        $sql = $db->query("UPDATE $tabla SET orden=".$dato->orden." WHERE id=".$dato->id);
		    }

			$db->close();	

			echo '1';
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function activo(){
		try{
			$db = new Conexion();

			$id = $_POST['id'];
			$tabla = $_POST['tabla'];

			$sql = $db->query("UPDATE $tabla SET activo=NOT activo WHERE id=$id;");

			$sql2 = $db->query("SELECT activo FROM $tabla WHERE id=$id;");

			$activo = 0;

			if($db->rows($sql2) > 0){
				//si un dato coincide, login
				$datos = $db->recorrer($sql2);
				
				$activo = $datos['activo'];
			}
			else{
				//sino, mensaje de error
				throw new Exception(2); // 2 = conexion fallida
			}

			$db->liberar($sql2);
			$db->close();

			echo $activo;
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

}

?>