<?php /* Smarty version 3.1.27, created on 2021-08-17 21:35:22
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\nosotros.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:499599124611c0f7ac1b266_78147515%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d93c7e048ca20b5cd34cf03f78102aa958236bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\nosotros.tpl',
      1 => 1629228919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '499599124611c0f7ac1b266_78147515',
  'variables' => 
  array (
    'datosPortada' => 0,
    'datosTestimonios' => 0,
    'datosEmpleados' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611c0f7ac7d9b8_01672539',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611c0f7ac7d9b8_01672539')) {
function content_611c0f7ac7d9b8_01672539 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '499599124611c0f7ac1b266_78147515';
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
    
    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activo'=>'nosotros'), 0);
?>


    <div class="container-fluid no-padding div-banner" style="background-image: url('img/banner-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3>Nosotros</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
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
              <h2>Sobre Nosotros</h2>

              <h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</h6>

              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem.</p>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <img src="img/bakery-1.jpg"  class="full-width"  alt="">
          </div>

          <div class="col-md-4 mb-3">
            <img src="img/bakery-2.jpg"  class="full-width"  alt="">
          </div>

          <div class="col-md-4 mb-3">
            <img src="img/bakery-3.jpg"  class="full-width"  alt="">
          </div>
        </div>
      </div>

    </div>

    <div class="container-fluid paralax" style="background-image: url('img/video-1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="media">              
              <div class="media-body media-body-interior text-center">
                <h4>Real Taste</h4>
                <p>A light, sour wheat dough with roasted walnuts and freshly picked rosemary, thyme, poppy seeds, parsley and sage</p>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid padding-100 div-mision">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2>Misión</h2>
          </div>

          <div class="col-lg-9">
            <div class="mision-texto">
              <h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan-tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</h6>

              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</p>
            </div>
          </div>
        </div>
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

    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  </body>
</html><?php }
}
?>