<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Empleados.php');

	$empleados = new Empleados();

	if($_POST){
		$empleados->crear();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/empleadoscrear.tpl');
	}

}
else{
	header('location: admin');
}

?>