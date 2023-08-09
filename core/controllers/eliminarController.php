<?php

if(isset($_SESSION['user'])){

	include_once('core/models/class.Acceso.php');
	$acceso = new Acceso();
	$acceso->eliminar();
	exit;

}

?>