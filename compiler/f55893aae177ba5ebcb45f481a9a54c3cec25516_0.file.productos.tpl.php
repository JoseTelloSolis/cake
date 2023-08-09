<?php /* Smarty version 3.1.27, created on 2021-08-10 16:07:44
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\productos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:108882193861128830775683_03636086%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f55893aae177ba5ebcb45f481a9a54c3cec25516' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\productos.tpl',
      1 => 1628552411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108882193861128830775683_03636086',
  'variables' => 
  array (
    'datosProductosTextos' => 0,
    'datosProductos' => 0,
    'paginador' => 0,
    'datosPortada' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611288307d5ba6_01634650',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611288307d5ba6_01634650')) {
function content_611288307d5ba6_01634650 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '108882193861128830775683_03636086';
?>
<!doctype html>
<html lang="es">
  <head>
    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

  </head>
  <body>
    
    <?php $_smarty_tpl->tpl_vars["buscar"] = new Smarty_Variable(array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','January','February','March','April','May','June','July','August','September','October','November','December'), null, 0);?>
    <?php $_smarty_tpl->tpl_vars["reemplazar"] = new Smarty_Variable(array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'), null, 0);?>
    
    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activo'=>'productos'), 0);
?>


    <div class="container-fluid no-padding div-banner" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosProductosTextos']->value['imagen'];?>
')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3><?php echo $_smarty_tpl->tpl_vars['datosProductosTextos']->value['titulo'];?>
</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="productos.html">Productos</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid fondo-area">

      <div class="container div-bienvenidos padding-100">
        <div class="row">

          <div class="col-md-12">
            <div class="titulo-interiores">
              <h2><?php echo $_smarty_tpl->tpl_vars['datosProductosTextos']->value['titulo2'];?>
</h2>

              <h5 class="texto-productos mb-5"><?php echo nl2br($_smarty_tpl->tpl_vars['datosProductosTextos']->value['texto']);?>
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

        <div class="row">
          <div class="col-sm-12">
            <nav aria-label="Page navigation example">
              <?php echo $_smarty_tpl->tpl_vars['paginador']->value;?>

            </nav>
          </div>
        </div>

      </div>

    </div>

    <div class="container-fluid paralax mb-5" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosPortada']->value['fondo_seccion3'];?>
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

    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  </body>
</html><?php }
}
?>