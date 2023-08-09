<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Noticias.php');

	$noticias = new Noticias();

	if($_POST){
		$noticias->getDatos();
		exit;
	}
	else{
		$paginador = $noticias->getPaginador('panelnoticias.html');

		$template = new Smarty();
		$template->assign('paginador',$paginador);
		$template->display('panel/noticias.tpl');
	}

}
else{
	header('location: admin');
}

?>