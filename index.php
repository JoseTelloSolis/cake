<?php
//error_reporting(0);
session_start();

$rootDir = "http://localhost/cake/";

$view = '';
$url = '';

if(isset($_GET['view'])){
	if(strpos($_GET['view'], '/')) {
		$arr = explode('/', $_GET['view']);
		$view = $arr[0];
		$url = $arr[1];
	}
	else {
		$view = $_GET['view'];
  	$view = str_replace(".html", "", $view);
	}
}
else{
  $view = 'index';
}

//require('core/libs/smarty/Smarty.class.php');
require_once('core/libs/smarty/SmartyBC.class.php');
require('core/models/class.Conexion.php');

if(file_exists('core/controllers/'.$view.'Controller.php')){
  include('core/controllers/'.$view.'Controller.php');
}
else{
  //pagina de error
  include('core/controllers/errorController.php');
}

?>