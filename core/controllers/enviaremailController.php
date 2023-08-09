<?php

include_once('core/models/class.Acceso.php');
$acceso = new Acceso();
$acceso->enviarEmail();
exit;

?>