<?php /* Smarty version 3.1.27, created on 2021-08-17 22:02:20
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2044436429611c15cc2a3a12_67351705%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '124c91bd0f0605f9bb71d968e0e7fa939a4eb6f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\index.tpl',
      1 => 1629230538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2044436429611c15cc2a3a12_67351705',
  'variables' => 
  array (
    'datosPortadaSlider' => 0,
    'datosPortada' => 0,
    'datosProductos' => 0,
    'datosEmpleados' => 0,
    'datosTestimonios' => 0,
    'datosBlog' => 0,
    'buscar' => 0,
    'reemplazar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611c15cc30d631_74095776',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611c15cc30d631_74095776')) {
function content_611c15cc30d631_74095776 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\cake\\core\\libs\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp\\htdocs\\cake\\core\\libs\\smarty\\plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '2044436429611c15cc2a3a12_67351705';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  </head>
  <body>

    <?php $_smarty_tpl->tpl_vars["buscar"] = new Smarty_Variable(array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','January','February','March','April','May','June','July','August','September','October','November','December'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["reemplazar"] = new Smarty_Variable(array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'), null, 0);?>
    
    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activo'=>'index'), 0);
?>


    <div class="container-fluid no-padding">
      <div id="carousel-index" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datosPortadaSlider']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>

          <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['first']) {?>
            <div class="carousel-item slide1 active" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosPortadaSlider']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
')" data-interval="8000">
          <?php } else { ?>
            <div class="carousel-item slide1" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosPortadaSlider']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
')" data-interval="8000">
          <?php }?>

            <img src="img/slider.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
              <div class="caption-top">
                <div class="box">
                  <h3><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortadaSlider']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo']);?>
</h3>
                </div>                
              </div>
              <div class="caption-bottom">
                <div class="box">
                  <p><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortadaSlider']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['texto']);?>
</p>

                  <?php if ($_smarty_tpl->tpl_vars['datosPortadaSlider']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['boton'] != '') {?>
                    <a class="boton" href="<?php echo $_smarty_tpl->tpl_vars['datosPortadaSlider']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['datosPortadaSlider']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['boton'];?>
</a>
                  <?php }?>
                </div> 
              </div>              
            </div>
          </div>
          <?php endfor; endif; ?>
         
        </div>
        <a class="carousel-control-prev" href="#carousel-index" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-index" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="container-fluid fondo-area">

      <div class="container div-bienvenidos padding-100">
        <div class="row">

          <div class="col-md-6">
            <div class="titulo-principal">
              <h2><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo_seccion1'];?>
</h2>

              <p><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortada']->value['texto1_seccion1']);?>
</p>
            </div>         

            <p class="texto-gris"><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortada']->value['texto2_seccion1']);?>
</p>

            <?php if ($_smarty_tpl->tpl_vars['datosPortada']->value['boton_seccion1'] != '') {?>
              <a class="boton-rosado" href="<?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['enlace_seccion1'];?>
"><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['boton_seccion1'];?>
</a>
            <?php }?>
          </div>

          <div class="col-md-6">
            <img class="full-width" src="<?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['imagen_seccion1'];?>
" alt="">
          </div>

        </div>
      </div>

      <div class="container div-productos">
        <div class="row">
          <div class="col-sm-12">
            <div class="titulo-principal">
              <h2><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo_seccion2'];?>
</h2>

              <h5><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortada']->value['texto_seccion2']);?>
</h5>
            </div>
          </div>
        </div>

        <div class="row">

          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datosProductos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
            <!-- producto -->
            <div class="col-6 col-md-4 col-lg-3 mb-4">
              <div class="div-producto">
                <a href="productos/<?php echo $_smarty_tpl->tpl_vars['datosProductos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
">
                  <div class="div-imagen" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosProductos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
');">
                    <img src="img/producto.png" class="full-width">
                  </div>
                </a>
                <div class="div-texto">
                  <h4>S/.<?php echo $_smarty_tpl->tpl_vars['datosProductos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['precio'];?>
</h4>
                  <h3><?php echo $_smarty_tpl->tpl_vars['datosProductos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nombre'];?>
</h3>
                  <a class="boton-producto" href="productos/<?php echo $_smarty_tpl->tpl_vars['datosProductos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
">Añadir al Carrito</a>
                </div>
              </div>
            </div>
            <!-- end producto -->
          <?php endfor; endif; ?>

        </div>
      </div>

    </div>

    <div class="container-fluid paralax" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['fondo_seccion3'];?>
');">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="media">
              <div class="d-flex">
                <img src="<?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['imagen_seccion3'];?>
" alt="">
              </div>
              <div class="media-body">
                <h4><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo_seccion3'];?>
</h4>
                <p><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortada']->value['texto_seccion3']);?>
</p>

                <?php if ($_smarty_tpl->tpl_vars['datosPortada']->value['boton_seccion3'] != '') {?>
                  <a class="boton2" href="<?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['enlace_seccion3'];?>
"><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['boton_seccion3'];?>
</a>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid div-servicios">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo_seccion4'];?>
</h2>
          </div>
        </div>

        <div class="row">

          <!-- servicio -->
          <div class="col-md-4">
            <div class="div-servicio">
              <img src="<?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['imagen1_seccion4'];?>
" class="img-servicio">
              <h4><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo1_seccion4'];?>
</h4>
              <p><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortada']->value['texto1_seccion4']);?>
</p>
            </div>
          </div>
          <!-- end servicio -->

          <!-- servicio -->
          <div class="col-md-4">
            <div class="div-servicio">
              <img src="<?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['imagen2_seccion4'];?>
" class="img-servicio">
              <h4><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo2_seccion4'];?>
</h4>
              <p><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortada']->value['texto2_seccion4']);?>
</p>
            </div>
          </div>
          <!-- end servicio -->

          <!-- servicio -->
          <div class="col-md-4">
            <div class="div-servicio">
              <img src="<?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['imagen3_seccion4'];?>
" class="img-servicio">
              <h4><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo3_seccion4'];?>
</h4>
              <p><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortada']->value['texto3_seccion4']);?>
</p>
            </div>
          </div>
          <!-- end servicio -->

        </div>
      </div>
    </div>

    <div class="container div-empleados padding-100">
      <div class="row">

        <div class="col-6 col-sm-6 col-md-3">
          <div class="titulo-principal">
            <h2><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo_seccion5'];?>
</h2>
            <p><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortada']->value['texto_seccion5']);?>
</p>
          </div>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datosEmpleados']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
          <div class="col-6 col-sm-6 col-md-3">
            <div class="div-empleado">
              <div class="empleado-imagen">
                <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
" alt="">
                <ul class="empleado-lista">

                  <?php if ($_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['facebook'] != '') {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['facebook'];?>
" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                  <?php }?>

                  <?php if ($_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['twitter'] != '') {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['twitter'];?>
" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  <?php }?>

                  <?php if ($_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['linkedin'] != '') {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['linkedin'];?>
" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                  <?php }?>                  

                  <?php if ($_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['instagram'] != '') {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['instagram'];?>
" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  <?php }?>
                  
                </ul>
              </div>
              <h4><?php echo $_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nombre'];?>
</h4>
              <h5><?php echo $_smarty_tpl->tpl_vars['datosEmpleados']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['descripcion'];?>
</h5>
            </div>
          </div>
        <?php endfor; endif; ?>

      </div>
    </div>

    <div class="container-fluid div-clientes padding-100">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12">
            <div class="titulo-clientes">
              <h2><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo_seccion6'];?>
</h2>

              <div class="slider-clientes-botones">
                <a href="#" class="slider-clientes-prev mr-2">
                  <i class="fas fa-angle-left"></i>
                </a>
                <a href="#" class="slider-clientes-next">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div id="carousel-clientes" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner">


                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datosTestimonios']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>

                  <!-- cliente -->

                  <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['first']) {?>
                    <div class="carousel-item active">
                  <?php } else { ?>
                    <div class="carousel-item">
                  <?php }?>

                    <div class="item">
                      <div class="media">
                        <div class="d-flex">
                          <?php if ($_smarty_tpl->tpl_vars['datosTestimonios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'] != '') {?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['datosTestimonios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
" alt="" class="testimonio-imagen">
                          <?php } else { ?>
                            <img src="img/testimonios/testimonio.png" alt="" class="testimonio-imagen">
                          <?php }?>
                          <h3>“</h3>
                        </div>
                        <div class="media-body">
                          <p><?php echo nl2br($_smarty_tpl->tpl_vars['datosTestimonios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['texto']);?>
</p>
                          <h5>- <?php echo $_smarty_tpl->tpl_vars['datosTestimonios']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nombre'];?>
</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end cliente -->
                <?php endfor; endif; ?>

              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container div-blog padding-100">
      <div class="row">
        <div class="col-sm-12">
          <div class="titulo-principal">
            <h2><?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['titulo_seccion7'];?>
</h2>
            <h5><?php echo nl2br($_smarty_tpl->tpl_vars['datosPortada']->value['texto_seccion7']);?>
</h5>
          </div>
        </div>
      </div>

      <div class="row">


        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datosBlog']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
          <!-- blog -->
          <div class="col-md-4">
            <div class="blog-item">
              <div class="blog-imagen" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
')">
                <img class="full-width" src="img/blogimagen.png" alt="">
              </div>
              <div class="blog-texto">
                <a href="blog/<?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
"><h5><?php echo smarty_modifier_replace(smarty_modifier_date_format($_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fecha'],"%e %B %Y"),$_smarty_tpl->tpl_vars['buscar']->value,$_smarty_tpl->tpl_vars['reemplazar']->value);?>
</h5></a>
                <a href="blog/<?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</h4></a>
                <p><?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['resumen'];?>
</p>
              </div>
            </div>
          </div>
          <!-- end blog -->
        <?php endfor; endif; ?>

      </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  </body>
</html><?php }
}
?>