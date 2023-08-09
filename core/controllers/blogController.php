<?php

include('core/models/class.Configuraciones.php');
include('core/models/class.Portada.php');
include('core/models/class.Productos.php');
include('core/models/class.BlogTextos.php');
include('core/models/class.Blog.php');

$configuraciones = new Configuraciones();
$portada = new Portada();
$productos = new Productos();
$blogTextos = new BlogTextos();
$blog = new Blog();

$datosConfiguraciones = $configuraciones->getDatos();
$datosPortada = $portada->getDatos();
$datosBlogTextos = $blogTextos->getDatos();

$datosBlog = $blog->getDatosWeb();
$paginador = $blog->getPaginadorWeb('blog.html');

$template = new Smarty();
$template->assign('datosConfiguraciones',$datosConfiguraciones);
$template->assign('datosPortada',$datosPortada);
$template->assign('datosBlogTextos',$datosBlogTextos);
$template->assign('datosBlog',$datosBlog);
$template->assign('paginador',$paginador);
$template->assign('rootDir', $rootDir);

if($url == ''){
	$template->display('web/blog.tpl');
}
else{
	$datos = $blog->getDatoUrl($url);
	$ultimos = $blog->getUltimos($datos['id']);

	$template->assign('datos', $datos);
	$template->assign('ultimos', $ultimos);
	$template->display('web/blogentrada.tpl');
}

?>