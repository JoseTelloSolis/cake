<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Productos.php');

	$productos = new Productos();

	if($_POST){
		$productos->editar();
		exit;
	}
	else{
		$datos = $productos->getDato();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/productoseditar.tpl');
	}

}
else{
	header('location: admin');
}

?>