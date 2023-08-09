<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Noticias.php');
	include('core/models/class.Categorias.php');

	$noticias = new Noticias();
	$categorias = new Categorias();

	if($_POST){
		$noticias->editar();
		exit;
	}
	else{
		$datos = $noticias->getDato();
		$datosCategorias = $categorias->getDatosAlfabetico();

		$template = new Smarty();
		$template->assign('datos', $datos);
		$template->assign('datosCategorias', $datosCategorias);
		$template->display('panel/noticiaseditar.tpl');
	}

}
else{
	header('location: admin');
}

?>