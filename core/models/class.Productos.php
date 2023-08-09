<?php

class Productos{

	public function getDato(){

		$id = $_GET['id'];

		try{
			$db = new Conexion();
			
			$sql = $db->query("SELECT * FROM productos WHERE id=$id;");

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

			$pagina = 1;

			if(isset($_POST['pagina'])){
				$pagina = $_POST['pagina'];
			}

			$per_page = 18;
			$offset = ($pagina - 1) * $per_page;

			$sql = $db->query("SELECT * FROM productos ORDER BY id DESC LIMIT $offset, $per_page;");

			$output = '';

			$editar = $_POST['editar'];

			if($db->rows($sql) > 0){

				//recorrer todos los datos
				while($datos = $db->recorrer($sql)){

					$output .= '
						<tr data-rel="'.$datos['id'].'">															
							<td><img src="'.$datos['imagen'].'" style="max-width:120px;"></td>
							<td>'.$datos['nombre'].'</td>
							<td>S/. '.$datos['precio'].'</td>
							<td>'.$datos['stock'].'</td>
					';  
 					    	            
				  $output .= '
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
			
			$nombre = str_replace("'", "\'", $_POST['nombre']);
			$url = $_POST['url'];
			$precio = $_POST['precio'];
			$stock = $_POST['stock'];
			$resumen = $_POST['resumen'];
			$descripcion = $_POST['descripcion'];
			$descripcion_opcional = $_POST['descripcion_opcional'];

			$validar = $db->query("SELECT * FROM productos WHERE url='$url' LIMIT 1;");

			if($db->rows($validar) > 0){
				echo 3;
				return;	
			}
	    
	    //guardando el titulo en la BD
	    $ejecutar = $db->query("INSERT INTO productos(
			nombre,
			url,
			precio,
			stock,
			resumen,
			descripcion,
			descripcion_opcional) 
			VALUES(
			'$nombre',
			'$url',
			$precio,
			$stock,
			'$resumen',
			'$descripcion',
			'$descripcion_opcional');");	

	    if($ejecutar){
	    	$sql = $db->query("SELECT id FROM productos ORDER BY id DESC LIMIT 1;");

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
          $directorio = "img/productos/";
          $nombreActual = basename($_FILES["imagen"]["name"]);
          //quitamos los espacios en blanco
          $nombreActual = str_replace(" ", "_", $nombreActual);
          $nombreArchivoFinal = $directorio . $prefijo . $nombreActual;
          
          //subiendo foto
          move_uploaded_file($_FILES["imagen"]["tmp_name"], $nombreArchivoFinal);
          
          //guardando la foto en base de datos
          $sql_imagen = $db->query("UPDATE productos SET imagen='$nombreArchivoFinal' WHERE id=$id;");
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
	    $nombre = str_replace("'", "\'", $_POST['nombre']);
			$url = $_POST['url'];
			$precio = $_POST['precio'];
			$stock = $_POST['stock'];
			$resumen = $_POST['resumen'];
			$descripcion = $_POST['descripcion'];
			$descripcion_opcional = $_POST['descripcion_opcional'];

			$validar = $db->query("SELECT * FROM productos WHERE url='$url' AND id!=$id LIMIT 1;");

			if($db->rows($validar) > 0){
				echo 3;
				return;	
			}
					    
	    //guardando el titulo en la BD
	    $sql = $db->query("UPDATE productos SET
			nombre='$nombre',
			url='$url',
			precio=$precio,
			stock=$stock,
			resumen='$resumen',
			descripcion='$descripcion',
			descripcion_opcional='$descripcion_opcional'
			WHERE id=$id;");

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
        $sql_imagen = $db->query("UPDATE productos SET imagen='$nombreArchivoFinal' WHERE id=$id;");
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

			$pagina = 1;

			if(isset($_GET['pagina'])){
				$pagina = $_GET['pagina'];
			}

			$per_page = 12;
			$offset = ($pagina - 1) * $per_page;

			$sql = $db->query("SELECT * FROM productos ORDER BY id DESC LIMIT $offset, $per_page;");

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

	public function getDatosLimit($limit){
		try{
			$db = new Conexion();

			$sql = $db->query("SELECT * FROM productos ORDER BY id DESC LIMIT $limit");

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

	public function getDatosRandom($id, $limit){
		try{
			$db = new Conexion();

			$sql = $db->query("SELECT * FROM productos WHERE id!=$id ORDER BY RAND() LIMIT $limit");

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

	public function getMasVistos(){
		try{
			$db = new Conexion();

			$sql = $db->query("SELECT * FROM productos ORDER BY vistas DESC LIMIT 4");

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

	public function getPaginador($reload){
		try{
			$page = 1;
			$adjacents = 4;
			$per_page = 18;

			if(isset($_GET['pagina'])){
				$page = $_GET['pagina'];
			}

			$db = new Conexion();

			$sql = $db->query("SELECT count(*) as conteo FROM productos;");

			$total_elementos = 0;

		    if($db->rows($sql) > 0){
				while($datos = $db->recorrer($sql)){
					$total_elementos = $datos['conteo'];
				}				
			}
			else{
				//sino, mensaje de error
				throw new Exception(2); // 2 = conexion fallida
			}

			$tpages = ceil($total_elementos / $per_page);

			$prevlabel = "&lsaquo; Anterior";
			$nextlabel = "Siguiente &rsaquo;";
			$out = '<ul class="pagination pagination-large">';

			if($page == 1) {
				$out .= "<li class='disabled'><span><a>$prevlabel</a></span></li>";
			} 
			elseif($page == 2) {
				$out .= "<li><span><a href='".$reload."?pagina=1'>$prevlabel</a></span></li>";
			}
			else {
				$out .= "<li><span><a href='".$reload."?pagina=".($page - 1)."'>$prevlabel</a></span></li>";
			}
			
			// first label
			if($page > ($adjacents + 1)) {
				$out .= "<li><a href='".$reload."?pagina=1'>1</a></li>";
			}
			// interval
			if($page > ($adjacents + 2)) {
				$out.= "<li><a>...</a></li>";
			}

			// pages

			$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
			$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
			for($i=$pmin; $i<=$pmax; $i++) {
				if($i==$page) {
					$out.= "<li class='active'><a>$i</a></li>";
				}else if($i==1) {
					$out.= "<li><a href='".$reload."?pagina=1'>$i</a></li>";
				}else {
					$out.= "<li><a href='".$reload."?pagina=".$i."'>$i</a></li>";
				}
			}

			// interval

			if($page<($tpages-$adjacents-1)) {
				$out.= "<li><a>...</a></li>";
			}

			// last

			if($page<($tpages-$adjacents)) {
				$out.= "<li><a href='".$reload."?pagina=".$tpages."'>$tpages</a></li>";
			}

			// next

			if($page<$tpages) {
				$out.= "<li><span><a href='".$reload."?pagina=".($page+1)."'>$nextlabel</a></span></li>";
			}else {
				$out.= "<li class='disabled'><span><a>$nextlabel</a></span></li>";
			}
			
			$out.= "</ul>";

			if($tpages == 1)
				$out = '';

			return $out;
		}
		catch(Exception $error){
			echo $error->getMessage();
		}	
	}

	public function getPaginadorWeb($reload){
		try{
			$page = 1;
			$adjacents = 3;
			$per_page = 12;

			if(isset($_GET['pagina'])){
				$page = $_GET['pagina'];
			}

			$db = new Conexion();

			$sql = $db->query("SELECT count(*) as conteo FROM productos;");

			$total_elementos = 0;

		    if($db->rows($sql) > 0){
				while($datos = $db->recorrer($sql)){
					$total_elementos = $datos['conteo'];
				}				
			}
			else{
				//sino, mensaje de error
				throw new Exception(2); // 2 = conexion fallida
			}

			$tpages = ceil($total_elementos / $per_page);

			$prevlabel = '<i class="fas fa-angle-left"></i>';
			$nextlabel = '<i class="fas fa-angle-right"></i>';
			$out = '<ul class="pagination">';

			if($page == 1) {
				$out .= "<li class='page-item disabled'><a class='page-link' href='#''>$prevlabel</a></li>";
			} 
			elseif($page == 2) {
				$out .= "<li class='page-item'><a href='".$reload."?pagina=1' class='page-link'>$prevlabel</a></li>";
			}
			else {
				$out .= "<li class='page-item'><a href='".$reload."?pagina=".($page - 1)."' class='page-link'>$prevlabel</a></li>";
			}
			
			// first label
			if($page > ($adjacents + 1)) {
				$out .= "<li class='page-item'><a href='".$reload."?pagina=1' class='page-link'>1</a></li>";
			}
			// interval
			if($page > ($adjacents + 2)) {
				$out.= "<li class='page-item disabled'><a class='page-link' href='#'>...</a></li>";
			}

			// pages

			$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
			$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
			for($i=$pmin; $i<=$pmax; $i++) {
				if($i==$page) {
					$out.= "<li class='page-item active'><a class='page-link' href='javascript:void(0)'>$i</a></li>";
				}else if($i==1) {
					$out.= "<li class='page-item'><a href='".$reload."?pagina=1' class='page-link'>$i</a></li>";
				}else {
					$out.= "<li class='page-item'><a href='".$reload."?pagina=".$i."' class='page-link'>$i</a></li>";
				}
			}

			// interval

			if($page<($tpages-$adjacents-1)) {
				$out.= "<li class='page-item'><a href='#' class='page-link'>...</a></li>";
			}

			// last

			if($page<($tpages-$adjacents)) {
				$out.= "<li class='page-item'><a href='".$reload."?pagina=".$tpages."' class='page-link'>$tpages</a></li>";
			}

			// next

			if($page<$tpages) {
				$out.= "<li class='page-item'><a href='".$reload."?pagina=".($page+1)."' class='page-link'>$nextlabel</a></li>";
			}else {
				$out.= "<li class='page-item disabled'><a href='#' class='page-link'>$nextlabel</a></li>";
			}
			
			$out.= "</ul>";

			if($tpages == 1 || $tpages == 0)
				$out = '';

			return $out;
		}
		catch(Exception $error){
			echo $error->getMessage();
		}	
	}

	public function getDatoWeb(){
		try{
			$db = new Conexion();

			$id = $_GET['id'];

			$sql = $db->query("SELECT * FROM productos WHERE id=$id;");

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

	public function getDatoUrl($url){

		try{
			$db = new Conexion();
			
			$sql = $db->query("SELECT * FROM productos WHERE url='$url' LIMIT 1;");

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

	public function addVista($id){
		try{
			$db = new Conexion();

			$db->query("UPDATE productos SET
			vistas=vistas+1
			WHERE id=$id;");

			$db->close();
		}
		catch(Exception $error){
			echo $error->getMessage();
		}
	}

}

?>