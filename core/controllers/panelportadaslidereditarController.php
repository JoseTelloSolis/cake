<?php

if(isset($_SESSION['user'])){

	include('core/models/class.PortadaSlider.php');

	$portadaSlider = new PortadaSlider();

	if($_POST){
		$portadaSlider->editar();
		exit;
	}
	else{
		$datos = $portadaSlider->getDato();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/portadaSlidereditar.tpl');
	}

}
else{
	header('location: admin');
}

?>