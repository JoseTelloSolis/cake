<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Empleados.php');

	$empleados = new Empleados();

	if($_POST){
		$empleados->getDatos();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/empleados.tpl');
	}

}
else{
	header('location: admin');
}

?>