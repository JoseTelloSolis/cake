<?php /* Smarty version 3.1.27, created on 2021-08-17 22:23:49
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1529323677611c1ad55df4f7_14741778%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d6cf0a4612cda0a866031f934873a305fb45e7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\blog.tpl',
      1 => 1629231827,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1529323677611c1ad55df4f7_14741778',
  'variables' => 
  array (
    'datosBlogTextos' => 0,
    'datosBlog' => 0,
    'buscar' => 0,
    'reemplazar' => 0,
    'paginador' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611c1ad565a897_05239021',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611c1ad565a897_05239021')) {
function content_611c1ad565a897_05239021 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\cake\\core\\libs\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) require_once 'C:\\xampp\\htdocs\\cake\\core\\libs\\smarty\\plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '1529323677611c1ad55df4f7_14741778';
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

    <div class="container-fluid fondo-area">

      <div class="container div-bienvenidos padding-100">
        
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
            <div class="col-12 col-md-6 col-lg-6 mb-4">
              <div class="div-producto div-blog">
                <a href="blog/<?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
">
                  <div class="div-imagen" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
');">
                    <img src="img/blogimagen.png" class="full-width">
                  </div>
                </a>
                <div class="div-fecha">
                  <span class="fecha"><?php echo smarty_modifier_replace(smarty_modifier_date_format($_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fecha'],"%e %B %Y"),$_smarty_tpl->tpl_vars['buscar']->value,$_smarty_tpl->tpl_vars['reemplazar']->value);?>
</span>

                  <?php if ($_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['autor'] != '') {?>
                    <span class="autor">Autor: <?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['autor'];?>
</span>
                  <?php }?>
                </div>
                <div class="div-texto text-left">
                  <a href="blog/<?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['titulo'];?>
</h3></a>

                  <p><?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['resumen'];?>
</p>

                  <a class="boton-producto" href="blog/<?php echo $_smarty_tpl->tpl_vars['datosBlog']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
">Leer más</a>
                </div>
              </div>
            </div>
            <!-- end blog -->
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

    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  </body>
</html><?php }
}
?>