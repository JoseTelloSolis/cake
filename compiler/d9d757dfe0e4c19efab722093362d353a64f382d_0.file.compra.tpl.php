<?php /* Smarty version 3.1.27, created on 2021-08-12 09:00:17
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\compra.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8231681236114c701a341a8_51107293%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9d757dfe0e4c19efab722093362d353a64f382d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\compra.tpl',
      1 => 1628751608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8231681236114c701a341a8_51107293',
  'variables' => 
  array (
    'datosProductosTextos' => 0,
    'carrito_productos' => 0,
    'producto' => 0,
    'precio_total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6114c701addec3_13915263',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6114c701addec3_13915263')) {
function content_6114c701addec3_13915263 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8231681236114c701a341a8_51107293';
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
    
    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('activo'=>''), 0);
?>


    <div class="container-fluid no-padding div-banner" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['datosProductosTextos']->value['imagen'];?>
')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3>Pedido</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="compra.html">Pedido</a></li>
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
            <div id="wizard" class="form_wizard wizard_horizontal">
              <ul class="wizard_steps anchor">
                <li>
                  <a href="javascript:void(0);" class="selected" isdone="1" rel="1">
                    <span class="step_no">1</span>
                    <span class="step_descr">
                      Paso 1<br>
                      <small>Orden de compra</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);" class="disabled" isdone="0" rel="2">
                    <span class="step_no">2</span>
                    <span class="step_descr">
                      Paso 2<br>
                      <small>Ingrese sus datos</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);" class="disabled" isdone="0" rel="3">
                    <span class="step_no">3</span>
                    <span class="step_descr">
                      Paso 3<br>
                      <small>Generar pedido</small>
                    </span>
                  </a>
                </li>
              </ul>
            </div>  
          </div>
        </div>
      </div>

      <div class="container pt-5">
        <div class="row">
          <div class="col-sm-12">
            <a href="#" class="volver"><i class="fas fa-reply"></i> Volver</a>
          </div>
        </div>
      </div>

      <div class="container div-bienvenidos pt-5 pb-5">
        <div class="row">

          <div class="col-sm-12 compra">
            <div class="table-responsive">
              <table class="table table-striped jambo_table">
                <thead>
                  <tr class="headings">
                    <th class="column-title"></th>
                    <th class="column-title">Producto</th>
                    <th class="column-title">Precio Unitario</th>
                    <th class="column-title">Cantidad</th>
                    <th class="column-title no-link last">Subtotal</th>
                    <th class="column-title text-center">Eliminar</th>                   
                  </tr>
                </thead>

                <tbody>
                  <?php
$_from = $_smarty_tpl->tpl_vars['carrito_productos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['producto'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['producto']->_loop = false;
$_smarty_tpl->tpl_vars['__foreach_carrito'] = new Smarty_Variable(array('index' => -1));
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_carrito']->value['index']++;
$foreach_producto_Sav = $_smarty_tpl->tpl_vars['producto'];
?>
                    <?php if (((isset($_smarty_tpl->tpl_vars['__foreach_carrito']->value['index']) ? $_smarty_tpl->tpl_vars['__foreach_carrito']->value['index'] : null)+1)%2 == 0) {?>
                      <tr class="odd pointer">
                    <?php } else { ?>
                      <tr class="even pointer">
                    <?php }?>    
                      
                      <td class="imagen"><img src="<?php echo $_smarty_tpl->tpl_vars['producto']->value['imagen'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
"></td>
                      <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
                      <td>S/. <?php echo number_format($_smarty_tpl->tpl_vars['producto']->value['precio'],2,'.',',');?>
</td>
                      <td>
                        <div class="input-group detalle-producto-cantidad">
                          <input type="number" class="form-control cantidad" min="1" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['cantidad'];?>
" data-toggle="tooltip" data-placement="top" title="Clic en editar"> 
                          <button type="button" class="btn edit-cantidad" data-cod="<?php echo md5($_smarty_tpl->tpl_vars['producto']->value['codigo']);?>
" title="Editar cantidad"><i class="fas fa-pencil-alt"></i></button>
                        </div>
                      </td>
                      <td class="last">S/. <?php echo number_format(($_smarty_tpl->tpl_vars['producto']->value['precio']*$_smarty_tpl->tpl_vars['producto']->value['cantidad']),2,'.',',');?>
</td>
                      <td class="text-center">
                        <a href="javascript:void(0)" class="eliminar" title="Quitar producto de esta lista" data-cod="<?php echo md5($_smarty_tpl->tpl_vars['producto']->value['codigo']);?>
"><i class="fas fa-times"></i></a>
                      </td>                      
                    </tr>
                  <?php
$_smarty_tpl->tpl_vars['producto'] = $foreach_producto_Sav;
}
if (!$_smarty_tpl->tpl_vars['producto']->_loop) {
?>
                    <tr class="odd pointer">
                      <td colspan="6"><h4>Su carrito se encuentra vacio.</h4></td>
                    </tr>
                  <?php
}
?>
                  </tbody>
              </table>
            </div>

            <div class="total text-right mt-5">
              <?php if (!empty($_smarty_tpl->tpl_vars['carrito_productos']->value) && count($_smarty_tpl->tpl_vars['carrito_productos']->value) != 0) {?> 
              <h3>Total: S/ <?php echo number_format($_smarty_tpl->tpl_vars['precio_total']->value,2,'.',',');?>
</h3>
              <?php }?>
            </div>

            <div class="form-group botones text-right mt-5">
              <a href="productos.html" class="btn btn-secondary">Seguir Comprando</a>
              <?php if (!empty($_smarty_tpl->tpl_vars['carrito_productos']->value) && count($_smarty_tpl->tpl_vars['carrito_productos']->value) != 0) {?> 
              <a href="confirmar.html" class="boton-rosado boton-confirmar">Continuar Pedido <i class="fas fa-sign-out-alt"></i></a>
              <?php }?>
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