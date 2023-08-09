<?php

if(isset($_SESSION['user'])){

	include('core/models/class.ProductosTextos.php');
	$productosTextos = new ProductosTextos();

	if($_POST){
		$productosTextos->editar();
		exit;
	}
	else{
		$datos = $productosTextos->getDatos();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/productostextos.tpl');
	}

}
else{
	header('location: admin');
}

?>