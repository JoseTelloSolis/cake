<?php

include('core/models/class.Configuraciones.php');
include('core/models/class.Noticias.php');
include('core/models/class.Videos.php');
include('core/models/class.Categorias.php');

$configuraciones = new Configuraciones();
$noticias = new Noticias();
$videos = new Videos();
$categorias = new Categorias();

$datosConfiguraciones = $configuraciones->getDatos();
$masVistos = $noticias->getMasVistos();
$ultimoVideo = $videos->getUltimoVideo();
$datosCategorias = $categorias->getDatosWeb();

$datosVideos = $videos->getDatosWeb();
$paginador = $videos->getPaginadorWeb('videos.html');

$template = new Smarty();
$template->assign('datosConfiguraciones',$datosConfiguraciones);
$template->assign('datosVideos',$datosVideos);
$template->assign('paginador',$paginador);
$template->assign('masVistos',$masVistos);
$template->assign('ultimoVideo',$ultimoVideo);
$template->assign('datosCategorias',$datosCategorias);
$template->assign('rootDir', $rootDir);
$template->display('web/videos.tpl');

?>