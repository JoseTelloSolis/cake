<?php

class Portada{

	public function getDatos(){

		try{
			$db = new Conexion();
			
			$sql = $db->query("SELECT * FROM portada WHERE id=1;");

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

			$titulo_seccion1 = $_POST['titulo_seccion1'];
			$texto1_seccion1 = $_POST['texto1_seccion1'];
			$texto2_seccion1 = $_POST['texto2_seccion1'];
			$boton_seccion1 = $_POST['boton_seccion1'];
			$enlace_seccion1 = $_POST['enlace_seccion1'];
			$titulo_seccion2 = $_POST['titulo_seccion2'];
			$texto_seccion2 = $_POST['texto_seccion2'];
			$titulo_seccion3 = $_POST['titulo_seccion3'];
			$texto_seccion3 = $_POST['texto_seccion3'];
			$boton_seccion3 = $_POST['boton_seccion3'];
			$enlace_seccion3 = $_POST['enlace_seccion3'];
			$titulo_seccion4 = $_POST['titulo_seccion4'];	
			$titulo1_seccion4 = $_POST['titulo1_seccion4'];
			$texto1_seccion4 = $_POST['texto1_seccion4'];			
			$titulo2_seccion4 = $_POST['titulo2_seccion4'];
			$texto2_seccion4 = $_POST['texto2_seccion4'];			
			$titulo3_seccion4 = $_POST['titulo3_seccion4'];
			$texto3_seccion4 = $_POST['texto3_seccion4'];
			$titulo_seccion5 = $_POST['titulo_seccion5'];
			$texto_seccion5 = $_POST['texto_seccion5'];
			$titulo_seccion6 = $_POST['titulo_seccion6'];
			$titulo_seccion7 = $_POST['titulo_seccion7'];
			$texto_seccion7 = $_POST['texto_seccion7'];
   
	    //guardando el titulo en la BD
	    $sql = $db->query("UPDATE portada SET
			titulo_seccion1='$titulo_seccion1',
			texto1_seccion1='$texto1_seccion1',
			texto2_seccion1='$texto2_seccion1',
			boton_seccion1='$boton_seccion1',
			enlace_seccion1='$enlace_seccion1',
			titulo_seccion2='$titulo_seccion2',
			texto_seccion2='$texto_seccion2',
			titulo_seccion3='$titulo_seccion3',
			texto_seccion3='$texto_seccion3',
			boton_seccion3='$boton_seccion3',
			enlace_seccion3='$enlace_seccion3',
			titulo_seccion4='$titulo_seccion4',
			titulo1_seccion4='$titulo1_seccion4',
			texto1_seccion4='$texto1_seccion4',			
			titulo2_seccion4='$titulo2_seccion4',
			texto2_seccion4='$texto2_seccion4',			
			titulo3_seccion4='$titulo3_seccion4',
			texto3_seccion4='$texto3_seccion4',
			titulo_seccion5='$titulo_seccion5',
			texto_seccion5='$texto_seccion5',
			titulo_seccion6='$titulo_seccion6',
			titulo_seccion7='$titulo_seccion7',
			texto_seccion7='$texto_seccion7'
			WHERE id=1;");

			//subir fotos
	    if($_FILES['imagen_seccion1']['name'] != ""){
        //generando una cadena al azar para el nombre de la foto
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
        $numerodeletras = 8; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        
        for($j = 0; $j < $numerodeletras; $j++){
            $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
        }
        
        $prefijo = $cadena;
        $directorio = "img/portada/";
        $nombreActual = basename($_FILES["imagen_seccion1"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["imagen_seccion1"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE portada SET imagen_seccion1='$nombreArchivoFinal' WHERE id=1;");
	    }
	    //fin subir fotos
			
			//subir fotos
	    if($_FILES['imagen_seccion3']['name'] != ""){
        //generando una cadena al azar para el nombre de la foto
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
        $numerodeletras = 8; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        
        for($j = 0; $j < $numerodeletras; $j++){
            $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
        }
        
        $prefijo = $cadena;
        $directorio = "img/portada/";
        $nombreActual = basename($_FILES["imagen_seccion3"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["imagen_seccion3"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE portada SET imagen_seccion3='$nombreArchivoFinal' WHERE id=1;");
	    }
	    //fin subir fotos
			
			//subir fotos
	    if($_FILES['fondo_seccion3']['name'] != ""){
        //generando una cadena al azar para el nombre de la foto
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
        $numerodeletras = 8; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        
        for($j = 0; $j < $numerodeletras; $j++){
            $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
        }
        
        $prefijo = $cadena;
        $directorio = "img/portada/";
        $nombreActual = basename($_FILES["fondo_seccion3"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["fondo_seccion3"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE portada SET fondo_seccion3='$nombreArchivoFinal' WHERE id=1;");
	    }
	    //fin subir fotos
			
			//subir fotos
	    if($_FILES['imagen1_seccion4']['name'] != ""){
        //generando una cadena al azar para el nombre de la foto
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
        $numerodeletras = 8; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        
        for($j = 0; $j < $numerodeletras; $j++){
            $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
        }
        
        $prefijo = $cadena;
        $directorio = "img/portada/";
        $nombreActual = basename($_FILES["imagen1_seccion4"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["imagen1_seccion4"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE portada SET imagen1_seccion4='$nombreArchivoFinal' WHERE id=1;");
	    }
	    //fin subir fotos

			//subir fotos
	    if($_FILES['imagen2_seccion4']['name'] != ""){
        //generando una cadena al azar para el nombre de la foto
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
        $numerodeletras = 8; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        
        for($j = 0; $j < $numerodeletras; $j++){
            $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
        }
        
        $prefijo = $cadena;
        $directorio = "img/portada/";
        $nombreActual = basename($_FILES["imagen2_seccion4"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["imagen2_seccion4"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE portada SET imagen2_seccion4='$nombreArchivoFinal' WHERE id=1;");
	    }
	    //fin subir fotos

	    //subir fotos
	    if($_FILES['imagen3_seccion4']['name'] != ""){
        //generando una cadena al azar para el nombre de la foto
        $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
        $numerodeletras = 8; //numero de letras para generar el texto
        $cadena = ""; //variable para almacenar la cadena generada
        
        for($j = 0; $j < $numerodeletras; $j++){
            $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); 
        }
        
        $prefijo = $cadena;
        $directorio = "img/portada/";
        $nombreActual = basename($_FILES["imagen3_seccion4"]["name"]);
        //quitamos los espacios en blanco
        $nombreActual = str_replace(" ", "_", $nombreActual);
        $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
        
        //subiendo foto
        move_uploaded_file($_FILES["imagen3_seccion4"]["tmp_name"], $nombreArchivoFinal);
        
        //guardando la foto en base de datos
        $sql_imagen = $db->query("UPDATE portada SET imagen3_seccion4='$nombreArchivoFinal' WHERE id=1;");
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