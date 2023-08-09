<?php /* Smarty version 3.1.27, created on 2021-08-17 22:59:35
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\blogentrada.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2022853430611c2337d257d2_91859745%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e8433f6e7329d0e730b237680b2dbeefb75981' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\blogentrada.tpl',
      1 => 1629233974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2022853430611c2337d257d2_91859745',
  'variables' => 
  array (
    'datosBlogTextos' => 0,
    'datos' => 0,
    'buscar' => 0,
    'reemplazar' => 0,
    'datosBlog' => 0,
    'ultimos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611c2337d6c3c9_96115491',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611c2337d6c3c9_96115491')) {
function content_611c2337d6c3c9_96115491 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\cake\\core\\libs\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp\\htdocs\\cake\\core\\libs\\smarty\\plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '2022853430611c2337d257d2_91859745';
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
    
    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activo'=>'blog'), 0);
?>


    <div class="container-fluid no-padding div-banner" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosBlogTextos']->value['imagen'];?>
')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3><?php echo $_smarty_tpl->tpl_vars['datosBlogTextos']->value['titulo'];?>
</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="blog.html">Blog</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid fondo-area div-producto-detalle">

      <div class="container pt-5">
        <div class="row">
          <div class="col-sm-12">
            <a href="#" class="volver"><i class="fas fa-reply"></i> Volver</a>
          </div>
        </div>
      </div>

      <div class="container div-bienvenidos div-blog pt-5">
        <div class="row">

          <div class="col-lg-9">
            <img src="<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
" class="full-width" alt="">

            <div class="div-fecha">
              <span class="fecha"><?php echo smarty_modifier_replace(smarty_modifier_date_format($_smarty_tpl->tpl_vars['datos']->value['fecha'],"%e %B %Y"),$_smarty_tpl->tpl_vars['buscar']->value,$_smarty_tpl->tpl_vars['reemplazar']->value);?>
</span>

              <?php if ($_smarty_tpl->tpl_vars['datos']->value['autor'] != '') {?>
                <span class="autor">Autor: <?php echo $_smarty_tpl->tpl_vars['datos']->value['autor'];?>
</span>
              <?php }?>
            </div>

            <div class="div-texto text-left">
              <a href="blog/<?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
</h3></a>

              <?php echo $_smarty_tpl->tpl_vars['datos']->value['texto'];?>

            </div>

          </div>

          <div class="col-lg-3 sidebar">
            <h3>Lo último</h3>

            <div class="recientes">

              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ultimos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <div class="media">
                  <div class="imagen" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['ultimos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
');">
                    <a href="blog/<?php echo $_smarty_tpl->tpl_vars['ultimos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
">
                      <img src="img/sidebar.png" alt="<?php echo $_smarty_tpl->tpl_vars['ultimos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
">
                    </a>
                  </div>
                  <div class="media-body">
                    <a href="blog/<?php echo $_smarty_tpl->tpl_vars['ultimos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
"><h4><?php echo $_smarty_tpl->tpl_vars['ultimos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</h4></a>
                    <p class="fecha"><?php echo smarty_modifier_replace(smarty_modifier_date_format($_smarty_tpl->tpl_vars['ultimos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fecha'],"%e %B %Y"),$_smarty_tpl->tpl_vars['buscar']->value,$_smarty_tpl->tpl_vars['reemplazar']->value);?>
</p>
                  </div>
                </div>
              <?php endfor; endif; ?>
                  
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