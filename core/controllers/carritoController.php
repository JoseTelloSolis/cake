<?php

include('core/models/class.Carrito.php');

$carrito = new Carrito();

if(isset($_POST['add']) and $_POST['add'] == 'addcarrito'){

	//array que crea un producto
	$articulo = array(
		"codigo" => $_POST['id'],
		"nombre" => $_POST['nombre'],
		"precio" => $_POST['precio'],
		"imagen" => $_POST['imagen'],
		"url" => $_POST['url'],
		"cantidad" => $_POST['cantidad']
	);

	//añadir el producto
	$carrito->add($articulo);
}
elseif(isset($_POST['cantidad_articulos']) and $_POST['cantidad_articulos'] == 'cantidad_articulos'){
	$carrito->update_cantidad_articulos();
}

?>