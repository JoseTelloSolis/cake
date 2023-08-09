<?php

class Configuraciones{

	public function getDatos(){
		try{
			$db = new Conexion();
			
			$sql = $db->query("SELECT * FROM configuraciones WHERE id=1;");

			if($db->rows($sql) > 0){
				$datos = $db->recorrer($sql);
				return $datos;
			}
			else{
				throw new Exception(2);
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
			
			$email = $_POST['email'];
			$telefono = $_POST['telefono'];
			$texto = $_POST['texto'];
			$direccion = $_POST['direccion'];
			$horario = $_POST['horario'];
			$facebook = $_POST['facebook'];
			$twitter = $_POST['twitter'];
			$instagram = $_POST['instagram'];
		    
		  //guardando el titulo en la BD
		  $sql = $db->query("UPDATE configuraciones SET 
			email='$email',
			telefono='$telefono',
			texto='$texto',
			direccion='$direccion',
			horario='$horario',
			facebook='$facebook',
			twitter='$twitter',
			instagram='$instagram'
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
        $directorio = "img/";
        $nombreActual = basename($_FILES["imagen"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["imagen"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE configuraciones SET logo='$nombreArchivoFinal' WHERE id=1;");
	    }
	    //fin subir fotos

			//subir fotos
	    if($_FILES['imagen2']['name'] != ""){
        //generando una cadena al azar para el nombre de la foto
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
        $numerodeletras = 8; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        
        for($j = 0; $j < $numerodeletras; $j++){
            $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
        }
        
        $prefijo = $cadena;
        $directorio = "img/";
        $nombreActual = basename($_FILES["imagen2"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["imagen2"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE configuraciones SET logo_mini='$nombreArchivoFinal' WHERE id=1;");
	    }
	    //fin subir fotos

			echo 1;

			$db->close();	
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

}

?>