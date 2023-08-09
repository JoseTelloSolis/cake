<?php

class ProductosTextos{

	public function getDatos(){

		try{
			$db = new Conexion();
			
			$sql = $db->query("SELECT * FROM productos_textos WHERE id=1;");

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

	public function editar(){
		try{
			$db = new Conexion();

			$titulo = $_POST['titulo'];
			$titulo2 = $_POST['titulo2'];
			$texto = $_POST['texto'];
   
	    //guardando el titulo en la BD
	    $sql = $db->query("UPDATE productos_textos SET
			titulo='$titulo',
			titulo2='$titulo2',
			texto='$texto'
			WHERE id=1;");

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
        $directorio = "img/productos/";
        $nombreActual = basename($_FILES["imagen"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE productos_textos SET imagen='$nombreArchivoFinal' WHERE id=1;");
	    }
	    //fin subir fotos

			echo 1; // 1 = conexion exitosa

			$db->close();	
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

}

?>