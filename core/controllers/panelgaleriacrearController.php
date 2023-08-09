<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Galeria.php');

	$galeria = new Galeria();

	if($_POST){
		$galeria->crear();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/galeriacrear.tpl');
	}

}
else{
	header('location: admin');
}

?>