<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Configuraciones.php');
	$configuraciones = new Configuraciones();

	if($_POST){
		$configuraciones->editar();
		exit;
	}
	else{
		$datos = $configuraciones->getDatos();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/configuraciones.tpl');
	}

}
else{
	header('location: admin');
}

?>