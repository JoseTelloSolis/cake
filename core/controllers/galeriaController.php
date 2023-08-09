<?php

include('core/models/class.Configuraciones.php');
include('core/models/class.Portada.php');
include('core/models/class.Galeria.php');
include('core/models/class.ProductosTextos.php');

$configuraciones = new Configuraciones();
$portada = new Portada();
$galeria = new Galeria();
$productosTextos = new ProductosTextos();

$datosConfiguraciones = $configuraciones->getDatos();
$datosPortada = $portada->getDatos();
$datosGaleria = $galeria->getDatosWeb();
$datosProductosTextos = $productosTextos->getDatos();

$template = new Smarty();
$template->assign('datosConfiguraciones',$datosConfiguraciones);
$template->assign('datosPortada',$datosPortada);
$template->assign('datosGaleria',$datosGaleria);
$template->assign('datosProductosTextos',$datosProductosTextos);
$template->assign('rootDir', $rootDir);
$template->display('web/galeria.tpl');

?>