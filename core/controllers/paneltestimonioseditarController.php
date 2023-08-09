<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Testimonios.php');

	$testimonios = new Testimonios();

	if($_POST){
		$testimonios->editar();
		exit;
	}
	else{
		$datos = $testimonios->getDato();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/testimonioseditar.tpl');
	}

}
else{
	header('location: admin');
}

?>