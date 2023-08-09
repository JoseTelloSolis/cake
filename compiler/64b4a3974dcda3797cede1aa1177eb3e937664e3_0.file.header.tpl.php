<?php /* Smarty version 3.1.27, created on 2021-08-17 21:31:06
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\overall\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:649323311611c0e7a604713_58950749%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64b4a3974dcda3797cede1aa1177eb3e937664e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\overall\\header.tpl',
      1 => 1629223409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '649323311611c0e7a604713_58950749',
  'variables' => 
  array (
    'datosConfiguraciones' => 0,
    'activo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611c0e7a65c603_14394139',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611c0e7a65c603_14394139')) {
function content_611c0e7a65c603_14394139 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '649323311611c0e7a604713_58950749';
?>
    <div id="barra-rosa" class="container-fluid barra-rosa">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 div-telefono">
            <a href="javascript:void(0)">
              <i class="fas fa-phone fa-flip-horizontal"></i> <?php echo $_smarty_tpl->tpl_vars['datosConfiguraciones']->value['telefono'];?>

            </a>
            <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['datosConfiguraciones']->value['email'];?>
">
              <i class="far fa-envelope"></i> <?php echo $_smarty_tpl->tpl_vars['datosConfiguraciones']->value['email'];?>

            </a>
          </div>

          <div class="col-lg-6 div-redes text-right">

            <?php if ($_smarty_tpl->tpl_vars['datosConfiguraciones']->value['facebook'] != '') {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['datosConfiguraciones']->value['facebook'];?>
" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['datosConfiguraciones']->value['twitter'] != '') {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['datosConfiguraciones']->value['twitter'];?>
" target="_blank"><i class="fab fa-twitter"></i></a>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['datosConfiguraciones']->value['instagram'] != '') {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['datosConfiguraciones']->value['instagram'];?>
" target="_blank"><i class="fab fa-instagram"></i></a>
            <?php }?>

            <span class="separador"></span>
            <a href="compra.html" id="carrito" class="carrito">
              <i class="fas fa-shopping-cart"></i>
              <span id="cantidad-articulos" class="itemCount empty" title="Productos en carrito">0</span>
            </a>
            <a href="#"><i class="fas fa-search"></i></a>

          </div>

        </div>
      </div>
    </div>

    <div id="menu" class="container-fluid menu-principal">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.html">
          <img src="<?php echo $_smarty_tpl->tpl_vars['datosConfiguraciones']->value['logo'];?>
" alt="">
          <img src="<?php echo $_smarty_tpl->tpl_vars['datosConfiguraciones']->value['logo_mini'];?>
" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="my_toggle_menu">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <?php if ($_smarty_tpl->tpl_vars['activo']->value == 'index') {?>
                <li class="active"><a href="index.html">Inicio</a></li>
              <?php } else { ?>
                <li><a href="index.html">Inicio</a></li>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['activo']->value == 'nosotros') {?>
                <li class="active"><a href="nosotros.html">Nosotros</a></li>
              <?php } else { ?>
                <li><a href="nosotros.html">Nosotros</a></li>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['activo']->value == 'productos') {?>
                <li class="active"><a href="productos.html">Productos</a></li>
              <?php } else { ?>
                <li><a href="productos.html">Productos</a></li>
              <?php }?>
              
              <!--
              <li class="dropdown submenu">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                <ul class="dropdown-menu">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="our-team.html">Our Chefs</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                </ul>
              </li>
              -->

            </ul>
            <ul class="navbar-nav justify-content-end">

              <?php if ($_smarty_tpl->tpl_vars['activo']->value == 'galeria') {?>
                <li class="active"><a href="galeria.html">Galeria</a></li>
              <?php } else { ?>
                <li><a href="galeria.html">Galeria</a></li>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['activo']->value == 'blog') {?>
                <li class="active"><a href="blog.html">Blog</a></li>
              <?php } else { ?>
                <li><a href="blog.html">Blog</a></li>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['activo']->value == 'contacto') {?>
                <li class="active"><a href="#">Contacto</a></li>
              <?php } else { ?>
                <li><a href="#">Contacto</a></li>
              <?php }?>              
              
            </ul>
          </div>
        </nav>
      </div>
    </div><?php }
}
?>