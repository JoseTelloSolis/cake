<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Noticias.php');
	include('core/models/class.Categorias.php');

	$noticias = new Noticias();
	$categorias = new Categorias();

	if($_POST){
		$noticias->crear();
		exit;
	}
	else{
		$datosCategorias = $categorias->getDatosAlfabetico();

		$template = new Smarty();
		$template->assign('datosCategorias', $datosCategorias);
		$template->display('panel/noticiascrear.tpl');
	}

}
else{
	header('location: admin');
}

?>