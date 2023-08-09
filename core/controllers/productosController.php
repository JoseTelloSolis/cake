<?php

include('core/models/class.Configuraciones.php');
include('core/models/class.Portada.php');
include('core/models/class.Productos.php');
include('core/models/class.ProductosTextos.php');

$configuraciones = new Configuraciones();
$portada = new Portada();
$productos = new Productos();
$productosTextos = new ProductosTextos();

$datosConfiguraciones = $configuraciones->getDatos();
$datosPortada = $portada->getDatos();
$datosProductosTextos = $productosTextos->getDatos();
$datosProductos = $productos->getDatosWeb();
$paginador = $productos->getPaginadorWeb('productos.html');

$template = new Smarty();
$template->assign('datosConfiguraciones',$datosConfiguraciones);
$template->assign('datosPortada',$datosPortada);
$template->assign('datosProductosTextos',$datosProductosTextos);
$template->assign('datosProductos',$datosProductos);
$template->assign('paginador',$paginador);
$template->assign('rootDir', $rootDir);

if($url == ''){
	$template->display('web/productos.tpl');
}
else{
	$datos = $productos->getDatoUrl($url);

	$otros = $productos->getDatosRandom($datos['id'], 4);
	$template->assign('datos', $datos);
	$template->assign('otros', $otros);
	$template->display('web/producto.tpl');
}

?>