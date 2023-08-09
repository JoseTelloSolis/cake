<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Productos.php');

	$productos = new Productos();

	if($_POST){
		$productos->getDatos();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/productos.tpl');
	}

}
else{
	header('location: admin');
}

?>