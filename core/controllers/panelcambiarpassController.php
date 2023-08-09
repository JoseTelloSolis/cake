<?php

if(isset($_SESSION['user'])){

	if($_POST){
		include('core/models/class.Acceso.php');
		$acceso = new Acceso();
		$acceso->cambiarPass();
		exit;
	}
	else{
		$template = new Smarty();
		$template->display('panel/cambiarpass.tpl');
	}

}
else{
	header('location: admin');
}

?>