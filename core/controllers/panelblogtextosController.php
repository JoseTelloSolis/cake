<?php

if(isset($_SESSION['user'])){

	include('core/models/class.BlogTextos.php');
	$blogTextos = new BlogTextos();

	if($_POST){
		$blogTextos->editar();
		exit;
	}
	else{
		$datos = $blogTextos->getDatos();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/blogtextos.tpl');
	}

}
else{
	header('location: admin');
}

?>