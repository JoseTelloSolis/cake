<?php /* Smarty version 3.1.27, created on 2021-08-17 21:35:24
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\galeria.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:482547111611c0f7c557847_53861205%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5f10d8019f88ae5e4308dfc94c251344d534571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\galeria.tpl',
      1 => 1629228905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '482547111611c0f7c557847_53861205',
  'variables' => 
  array (
    'datosProductosTextos' => 0,
    'datosGaleria' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611c0f7c5897e2_26655206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611c0f7c5897e2_26655206')) {
function content_611c0f7c5897e2_26655206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '482547111611c0f7c557847_53861205';
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
    
    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activo'=>'galeria'), 0);
?>


    <div class="container-fluid no-padding div-banner" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosProductosTextos']->value['imagen'];?>
')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3>Galeria</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="galeria.html">Galeria</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid fondo-area">

      <div class="container div-productos">

        <div class="row">

          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datosGaleria']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
            <div class="col-6 col-md-4 col-lg-4 mb-4">
              <div class="div-producto div-galeria">
                <a href="<?php echo $_smarty_tpl->tpl_vars['datosGaleria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
" data-fancybox="gallery" data-caption="<?php echo $_smarty_tpl->tpl_vars['datosGaleria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
">
                  <div class="div-imagen" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosGaleria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
');">
                    <img src="img/galeria.png" class="full-width">
                  </div>
                </a>
                <div class="div-texto">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['datosGaleria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
" data-fancybox="gallery" data-caption="<?php echo $_smarty_tpl->tpl_vars['datosGaleria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
">
                    <h3><?php echo $_smarty_tpl->tpl_vars['datosGaleria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</h3>
                  </a>
                </div>
              </div>
            </div>
            <!-- end producto -->
          <?php endfor; endif; ?>

        </div>
      </div>

    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  </body>
</html><?php }
}
?>