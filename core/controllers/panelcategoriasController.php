<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Categorias.php');

	$categorias = new Categorias();

	if($_POST){
		$categorias->getDatos();
		exit;
	}
	else{		
		$template = new Smarty();
		$template->display('panel/categorias.tpl');
	}

}
else{
	header('location: admin');
}

?>