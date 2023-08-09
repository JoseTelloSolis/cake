<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Blog.php');

	$blog = new Blog();

	if($_POST){
		$blog->editar();
		exit;
	}
	else{
		$datos = $blog->getDato();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->display('panel/blogeditar.tpl');
	}

}
else{
	header('location: admin');
}

?>