<?php

if(isset($_SESSION['user'])){
	$template = new Smarty();
	$template->display('panel/inicio.tpl');
}
else{
	header('location: admin');
}

?>