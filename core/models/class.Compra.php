<?php

include_once('core/models/class.Carrito.php');

class Compra{

	public function generarPedido(){
		try{
			$db = new Conexion();
			$carrito = new Carrito();
		    
	    //$id_usuario = $_POST['id_usuario'];
	    $id_usuario = 0;
			$total = $_POST['total'];

			$nombre = $_POST['nombre'];
			$apellidos = $_POST['apellidos'];
			$telefono = $_POST['telefono'];
			$email = $_POST['email'];
			$departamento = $_POST['departamento'];
			$provincia = $_POST['provincia'];
			$distrito = $_POST['distrito'];
			$direccion = $_POST['direccion'];
			$observaciones = $_POST['observaciones'];

	    //guardando el titulo en la BD
	    $ejecutar = $db->query("INSERT INTO pedidos(
			id_usuario,
			nombre,
			apellidos,
			telefono,
			email,
			departamento,
			provincia,
			distrito,
			direccion,
			observaciones,
			total) 
			VALUES( 
			$id_usuario,
			'$nombre',
			'$apellidos',
			'$telefono',
			'$email',
			'$departamento',
			'$provincia',
			'$distrito',
			'$direccion',
			'$observaciones',
			$total);");

			if($ejecutar){
				$sql = $db->query("SELECT id FROM pedidos ORDER BY id DESC LIMIT 1;");

		    $id_pedido = 0;

		    if($db->rows($sql) > 0){
					while($datos = $db->recorrer($sql)){
						$id_pedido = $datos['id'];
					}
				}
				else{
					//sino, mensaje de error
					throw new Exception(2); // 2 = conexion fallida
				}

				$productos = $carrito->get_content();

				foreach($productos as $producto){
					$db->query("INSERT INTO pedidos_items(
					id_pedido,
					id_producto,
					cantidad,
					precio) 
					VALUES( 
					$id_pedido,
					".$producto['codigo'].",
					".$producto['cantidad'].",
					".$producto['precio'].");");
				}

				unset($_SESSION["carrito"]);

		    echo 1;
			}
			else {
				echo 2;
			}	    

	    $db->liberar($sql);
			$db->close();	
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function enviarEmail($id_pedido){
		try{
			$db = new Conexion();

			$sql = $db->query("SELECT * FROM pedidos WHERE id=$id_pedido;");

			if($db->rows($sql) > 0){
				//recorrer todos los datos
				while($datos = $db->recorrer($sql)){
					//$datos['id']
					
				}
			}
			else{
				//sino, mensaje de error
				throw new Exception(2); // 2 = no hay datos

			}

			$db->liberar($sql);
			$db->close();
		}
		catch(Exception $error){
			echo $error->getMessage();
		}		
	}

	public function getDepartamentos(){
		try{
			$db = new Conexion();

			$sql = $db->query("SELECT * FROM departamentos ORDER BY name ASC");

			$items = array();

			while($datos = $db->recorrer($sql)){
				$items[] = $datos;
			}

			$db->liberar($sql);
			$db->close();

			return $items;
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function getProvincias(){
		try{
			$db = new Conexion();

			$idDepartamento = $_POST['id'];

			$sql = $db->query("SELECT * FROM provincias WHERE department_id='$idDepartamento' ORDER BY name ASC");

			$items = array();

			while($datos = $db->recorrer($sql)){
				$items[] = $datos;
			}

			$db->liberar($sql);
			$db->close();

			echo json_encode($items);
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function getDistritos(){
		try{
			$db = new Conexion();

			$idProvincia = $_POST['id'];

			$sql = $db->query("SELECT * FROM distritos WHERE province_id='$idProvincia' ORDER BY name ASC");

			$items = array();

			while($datos = $db->recorrer($sql)){
				$items[] = $datos;
			}

			$db->liberar($sql);
			$db->close();

			echo json_encode($items);
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

}

?>