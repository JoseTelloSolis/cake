<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Testimonios.php');

	$testimonios = new Testimonios();

	if($_POST){
		$testimonios->crear();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/testimonioscrear.tpl');
	}

}
else{
	header('location: admin');
}

?>