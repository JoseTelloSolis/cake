<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Productos.php');

	$productos = new Productos();

	if($_POST){
		$productos->crear();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/productoscrear.tpl');
	}

}
else{
	header('location: admin');
}

?>