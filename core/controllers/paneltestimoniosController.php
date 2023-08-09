<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Testimonios.php');

	$testimonios = new Testimonios();

	if($_POST){
		$testimonios->getDatos();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/testimonios.tpl');
	}

}
else{
	header('location: admin');
}

?>