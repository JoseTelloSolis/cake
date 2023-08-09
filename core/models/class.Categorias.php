<?php

class Categorias{

	public function getDato(){

		$id = $_GET['id'];

		try{
			$db = new Conexion();
			
			$sql = $db->query("SELECT * FROM categorias WHERE id=$id;");

			if($db->rows($sql) > 0){
				//si un dato coincide, login
				$datos = $db->recorrer($sql);
				return $datos;				
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

	public function getDatos(){
		try{
			$db = new Conexion();

			$sql = $db->query("SELECT * FROM categorias ORDER BY orden ASC;");

			$output = '';

			$editar = $_POST['editar'];

			if($db->rows($sql) > 0){

				//recorrer todos los datos
				while($datos = $db->recorrer($sql)){

					$color = '
						<span class="label label-default">
							Sin color
						</span>
					';

					if($datos['color'] != ''){
						$color = '
							<span class="label label-default" style="background-color: #'.$datos['color'].'">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</span>
						';
					}

					$output .= '
						<tr data-rel="'.$datos['id'].'">															
							<td>'.$datos['nombre'].'</td>
							<td>'.$color.'</td>

				  		<td><a href="'.$editar.'?id='.$datos['id'].'" class="editar" title="Editar"><span class="glyphicon glyphicon-pencil" style="font-size: 24px;"></span></a></td>
				      <td><a href="javascript:void(0)" data-rel="'.$datos['id'].'" class="eliminar" title="Eliminar"><span class="glyphicon glyphicon-remove" style="font-size: 24px;"></span></a></td>
				    </tr>
				  ';
				}

			}
			else{
				//sino, mensaje de error
				throw new Exception(2); // 2 = no hay datos

			}

			$db->liberar($sql);
			$db->close();	

			echo $output;
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function crear(){
		try{
			$db = new Conexion();
		    
	    $nombre = $_POST['nombre'];
	    $color = $_POST['color'];
	    $url = $_POST['url'];

	    $validar = $db->query("SELECT * FROM categorias WHERE url='$url' LIMIT 1;");

			if($db->rows($validar) > 0){
				echo 3;
				return;	
			}
	    
	    //guardando el titulo en la BD
	    $ejecutar = $db->query("INSERT INTO categorias(nombre, color, url) VALUES('$nombre', '$color', '$url');");	

	    if($ejecutar){
	    	$sql = $db->query("SELECT id FROM categorias ORDER BY id DESC LIMIT 1;");

		    $id = 0;

		    if($db->rows($sql) > 0){
					while($datos = $db->recorrer($sql)){
						$id = $datos['id'];
					}
				}
				else{
					//sino, mensaje de error
					throw new Exception(2); // 2 = conexion fallida
				}

				//subir fotos
		    if($_FILES['imagen']['name'] != ""){
	        //generando una cadena al azar para el nombre de la foto
          $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
          $numerodeletras = 8; //numero de letras para generar el texto
          $cadena = ""; //variable para almacenar la cadena generada
          
          for($j = 0; $j < $numerodeletras; $j++){
              $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
          }
          
          $prefijo = $cadena;
          $directorio = "img/categorias/";
          $nombreActual = basename($_FILES["imagen"]["name"]);
          //quitamos los espacios en blanco
          $nombreActual = str_replace(" ", "_", $nombreActual);
          $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
          
          //subiendo foto
          move_uploaded_file($_FILES["imagen"]["tmp_name"], $nombreArchivoFinal);
          
          //guardando la foto en base de datos
          $sql_imagen = $db->query("UPDATE categorias set imagen='$nombreArchivoFinal' WHERE id=$id;");
		    }
		    //fin subir fotos

			  echo 1;
	    }
	    else{
	    	echo 2; 
	    }	       

			$db->close();	
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function editar(){
		try{
			$db = new Conexion();
		    
	    $id = $_POST['id'];
	    $nombre = $_POST['nombre'];
	    $color = $_POST['color'];
	    $url = $_POST['url'];

	    $validar = $db->query("SELECT * FROM categorias WHERE url='$url' AND id!=$id LIMIT 1;");

			if($db->rows($validar) > 0){
				echo 3;
				return;	
			}
					    
	    //guardando el titulo en la BD
	    $sql = $db->query("UPDATE categorias SET nombre='$nombre', color='$color', url='$url' WHERE id=$id;");

	    //subir fotos
	    if($_FILES['imagen']['name'] != ""){
        //generando una cadena al azar para el nombre de la foto
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
        $numerodeletras = 8; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        
        for($j = 0; $j < $numerodeletras; $j++){
            $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
        }
        
        $prefijo = $cadena;
        $directorio = "img/categorias/";
        $nombreActual = basename($_FILES["imagen"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE categorias set imagen='$nombreArchivoFinal' WHERE id=$id;");
	    }
	    //fin subir fotos

			echo 1; // 1 = conexion exitosa

			$db->close();	
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

	public function getDatosWeb(){
		try{
			$db = new Conexion();

			$sql = $db->query("SELECT * FROM categorias ORDER BY orden ASC;");

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

	public function getDatosAlfabetico(){
		try{
			$db = new Conexion();

			$sql = $db->query("SELECT * FROM categorias ORDER BY nombre ASC;");

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

}

?>