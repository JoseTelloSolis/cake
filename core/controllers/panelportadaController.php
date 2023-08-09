<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Portada.php');
	$portada = new Portada();

	if($_POST){
		$portada->editar();
		exit;
	}
	else{
		$datos = $portada->getDatos();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/portada.tpl');
	}

}
else{
	header('location: admin');
}

?>