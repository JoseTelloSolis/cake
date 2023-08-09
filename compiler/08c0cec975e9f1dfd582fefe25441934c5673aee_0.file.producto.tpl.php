<?php /* Smarty version 3.1.27, created on 2021-08-10 16:07:46
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\producto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:86584766561128832920374_99534951%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08c0cec975e9f1dfd582fefe25441934c5673aee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\producto.tpl',
      1 => 1628553499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86584766561128832920374_99534951',
  'variables' => 
  array (
    'datosProductosTextos' => 0,
    'datos' => 0,
    'otros' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6112883299dc76_94663846',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6112883299dc76_94663846')) {
function content_6112883299dc76_94663846 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '86584766561128832920374_99534951';
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

    <div class="container-fluid fondo-area div-producto-detalle">

      <div class="container pt-5">
        <div class="row">
          <div class="col-sm-12">
            <a href="#" class="volver"><i class="fas fa-reply"></i> Volver</a>
          </div>
        </div>
      </div>

      <div class="container div-bienvenidos pt-5">
        <div class="row">

          <div class="col-md-6">
            <img src="img/product-details-1.jpg" class="full-width" alt="">
          </div>

          <div class="col-md-6">
            <div class="producto-detalle">
              <input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">
              <input type="hidden" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
">
              <input type="hidden" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['precio'];?>
">
              <input type="hidden" id="imagen" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
">
              <input type="hidden" id="url" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['url'];?>
">

              <h4><?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
</h4>
              <p><?php echo nl2br($_smarty_tpl->tpl_vars['datos']->value['resumen']);?>
</p>
              <h5>Precio :<span>S/. <?php echo $_smarty_tpl->tpl_vars['datos']->value['precio'];?>
</span></h5>

              <?php if ($_smarty_tpl->tpl_vars['datos']->value['stock'] > 0) {?>
                <div class="quantity_box">
                  <label for="quantity">Cantidad :</label>
                  <input type="number" value="1" id="cantidad">
                </div>
                <a id="add-carrito" class="boton-rosado" href="#">Añadir al Carrito</a>
              <?php } else { ?>
                <p class="agotado">Agotado</p>
              <?php }?>
              
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-sm-12 mt-5">
            <div class="product_tab_area">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descripción</a>
                  <?php if ($_smarty_tpl->tpl_vars['datos']->value['descripcion_opcional'] != '') {?>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Especificaciones</a>
                  <?php }?>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <p><?php echo nl2br($_smarty_tpl->tpl_vars['datos']->value['descripcion']);?>
</p>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['datos']->value['descripcion_opcional'] != '') {?>
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p><?php echo nl2br($_smarty_tpl->tpl_vars['datos']->value['descripcion_opcional']);?>
</p>
                  </div> 
                <?php }?>               
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="container-fluid fondo-gris padding-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="titulo-principal">
              <h2>Productos relacionados</h2>
            </div>
          </div>
        </div>

        <div class="row">

          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['otros']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                <a href="productos/<?php echo $_smarty_tpl->tpl_vars['otros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
">
                  <div class="div-imagen" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['otros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imagen'];?>
');">
                    <img src="img/producto.png" class="full-width">
                  </div>
                </a>
                <div class="div-texto">
                  <h4>S/.<?php echo $_smarty_tpl->tpl_vars['otros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['precio'];?>
</h4>
                  <h3><?php echo $_smarty_tpl->tpl_vars['otros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['nombre'];?>
</h3>
                  <a class="boton-producto" href="productos/<?php echo $_smarty_tpl->tpl_vars['otros']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['url'];?>
">Añadir al Carrito</a>
                </div>
              </div>
            </div>
            <!-- end producto -->
          <?php endfor; endif; ?>

        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-mensaje" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel"><i class="fa fa-shopping-cart"></i> Carrito de compras</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3>Producto añadido a tu carrito de compras</h3>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Seguir Comprando</button>
            <a href="compra.html" class="boton-rosado"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ir al carrito</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->

    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  </body>
</html><?php }
}
?>