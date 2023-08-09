<?php

if(isset($_SESSION['user'])){

	include('core/models/class.Galeria.php');

	$galeria = new Galeria();

	if($_POST){
		$galeria->getDatos();
		exit;
	}
	else{
		$paginador = $galeria->getPaginador('panelgaleria.html');

		$template = new Smarty();
		$template->assign('paginador',$paginador);
		$template->display('panel/galeria.tpl');
	}

}
else{
	header('location: admin');
}

?>