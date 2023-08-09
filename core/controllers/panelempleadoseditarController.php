<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Empleados.php');

	$empleados = new Empleados();

	if($_POST){
		$empleados->editar();
		exit;
	}
	else{
		$datos = $empleados->getDato();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/empleadoseditar.tpl');
	}

}
else{
	header('location: admin');
}

?>