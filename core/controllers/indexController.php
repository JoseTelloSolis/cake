<?php

include('core/models/class.Configuraciones.php');
include('core/models/class.Portada.php');
include('core/models/class.PortadaSlider.php');
include('core/models/class.Productos.php');
include('core/models/class.Empleados.php');
include('core/models/class.Testimonios.php');
include('core/models/class.Blog.php');

$configuraciones = new Configuraciones();
$portada = new Portada();
$portadaSlider = new PortadaSlider();
$productos = new Productos();
$empleados = new Empleados();
$testimonios = new Testimonios();
$blog = new Blog();

$datosConfiguraciones = $configuraciones->getDatos();
$datosPortada = $portada->getDatos();
$datosPortadaSlider = $portadaSlider->getDatosWeb();
$datosProductos = $productos->getDatosLimit(8);
$datosEmpleados = $empleados->getDatosWeb();
$datosTestimonios = $testimonios->getDatosWeb();
$datosBlog = $blog->getDatosLimit(3);

$template = new Smarty();
$template->assign('datosConfiguraciones',$datosConfiguraciones);
$template->assign('datosPortada',$datosPortada);
$template->assign('datosPortadaSlider',$datosPortadaSlider);
$template->assign('datosProductos',$datosProductos);
$template->assign('datosEmpleados',$datosEmpleados);
$template->assign('datosTestimonios',$datosTestimonios);
$template->assign('datosBlog',$datosBlog);
$template->assign('rootDir', $rootDir);
$template->display('web/index.tpl');

?>