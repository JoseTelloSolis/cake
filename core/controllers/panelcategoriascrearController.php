<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Categorias.php');

	$categorias = new Categorias();

	if($_POST){
		$categorias->crear();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/categoriascrear.tpl');
	}

}
else{
	header('location: admin');
}

?>