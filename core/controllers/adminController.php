<?php

if($_POST){
	include_once('core/models/class.Acceso.php');
	$acceso = new Acceso();
	$acceso->login();
	exit;
}
else{
	$template = new Smarty();
	$template->display('panel/login.tpl');
}

?>