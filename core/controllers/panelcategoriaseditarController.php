<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Categorias.php');

	$categorias = new Categorias();

	if($_POST){
		$categorias->editar();
		exit;
	}
	else{
		$datos = $categorias->getDato();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/categoriaseditar.tpl');
	}

}
else{
	header('location: admin');
}

?>