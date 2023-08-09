<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Galeria.php');

	$galeria = new Galeria();

	if($_POST){
		$galeria->editar();
		exit;
	}
	else{
		$datos = $galeria->getDato();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/galeriaeditar.tpl');
	}

}
else{
	header('location: admin');
}

?>