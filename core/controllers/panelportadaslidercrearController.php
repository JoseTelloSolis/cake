<?php

if(isset($_SESSION['user'])){

	include('core/models/class.PortadaSlider.php');

	$portadaSlider = new PortadaSlider();

	if($_POST){
		$portadaSlider->crear();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/portadaSlidercrear.tpl');
	}

}
else{
	header('location: admin');
}

?>