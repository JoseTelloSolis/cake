<?php

include('core/models/class.Configuraciones.php');
include('core/models/class.Portada.php');
include('core/models/class.Productos.php');
include('core/models/class.ProductosTextos.php');
include('core/models/class.Carrito.php');

$configuraciones = new Configuraciones();
$portada = new Portada();
$productos = new Productos();
$productosTextos = new ProductosTextos();
$carrito = new Carrito();

if(isset($_POST['tipo']) and $_POST['tipo'] == 'edit_cantidad'){
	$carrito->update_cantidad($_POST['codigo'], $_POST['cantidad']);
}
elseif(isset($_POST['tipo']) and $_POST['tipo'] == 'eliminar'){
	$carrito->remove_producto($_POST['codigo']);
}
else{
	$datosConfiguraciones = $configuraciones->getDatos();
	$datosPortada = $portada->getDatos();
	$datosProductosTextos = $productosTextos->getDatos();

	$cantidad = $carrito->cantidad_articulos();

	$carrito_productos = $carrito->get_content();
	$precio_total = $carrito->precio_total();

	$template = new Smarty();
	$template->assign('datosConfiguraciones',$datosConfiguraciones);
	$template->assign('datosPortada',$datosPortada);
	$template->assign('datosProductosTextos',$datosProductosTextos);
	$template->assign('rootDir', $rootDir);

	$template->assign('cantidad',$cantidad);
	$template->assign('carrito_productos',$carrito_productos);
	$template->assign('precio_total',$precio_total);
	$template->display('web/compra.tpl');
}

?>