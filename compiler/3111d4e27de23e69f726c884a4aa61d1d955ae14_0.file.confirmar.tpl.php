<?php /* Smarty version 3.1.27, created on 2021-08-17 18:51:49
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\confirmar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:434470428611be925836959_01239029%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3111d4e27de23e69f726c884a4aa61d1d955ae14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\confirmar.tpl',
      1 => 1629218757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '434470428611be925836959_01239029',
  'variables' => 
  array (
    'datosProductosTextos' => 0,
    'precio_total' => 0,
    'departamentos' => 0,
    'carrito_productos' => 0,
    'producto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611be92587f2c5_63987040',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611be92587f2c5_63987040')) {
function content_611be92587f2c5_63987040 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '434470428611be925836959_01239029';
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
              <h3>Confirmar Pedido</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="confirmar.html">Pedido</a></li>
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
                  <a href="javascript:void(0);" class="selected" isdone="1" rel="2">
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

      <div class="container div-bienvenidos div-confirmar pt-5 pb-5">

        <form id="formulario">

          <div class="row">
            <div class="col-sm-12">
              <div class="titulo-principal">
                <h2>Detalle del Pedido</h2>
              </div>
            </div>  
          </div>

          <div class="row">
            <div class="col-md-6">

              <input type="hidden" id="total" name="total" value="<?php echo $_smarty_tpl->tpl_vars['precio_total']->value;?>
">
              <input type="hidden" id="id_usuario" name="id_usuario" value="0">
              <input type="hidden" id="tipo" name="tipo" value="confirmar">

              <div class="form-group">
                <label for="nombre">Nombre <span>*</span></label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>

              <div class="form-group">
                <label for="telefono">Email <span>*</span></label>
                <input type="text" class="form-control" id="email" name="email" required>
              </div>

              <div class="form-group">
                <label for="telefono">Departamento <span>*</span></label>
                <select class="form-control" id="departamento" name="departamento" required>
                  <option value="" selected disabled>Elegir...</option>

                  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['departamentos']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <option data-id="<?php echo $_smarty_tpl->tpl_vars['departamentos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['departamentos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['departamentos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option>
                  <?php endfor; endif; ?>
                </select>
              </div>

              <div class="form-group">
                <label for="telefono">Distrito <span>*</span></label>
                <select class="form-control" id="distrito" name="distrito" required>
                  <option value="" selected disabled>Elegir...</option>
                  <option value="Opcion1">Opcion1</option>
                  <option value="Opcion2">Opcion2</option>
                </select>
              </div>

            </div>

            <div class="col-md-6">
              
              <div class="form-group">
                <label for="apellidos">Apellidos <span>*</span></label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
              </div>

              <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
              </div>

              <div class="form-group">
                <label for="telefono">Provincia <span>*</span></label>
                <select class="form-control" id="provincia" name="provincia" required>
                  <option value="" selected disabled>Elegir...</option>
                  <option value="Opcion1">Opcion1</option>
                  <option value="Opcion2">Opcion2</option>
                </select>
              </div>

              <div class="form-group">
                <label for="telefono">Direccion <span>*</span></label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
              </div>

            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label for="telefono">Observaciones</label>
                <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
              </div>
            </div>

          </div>
        
        

          <div class="row">

            <div class="row">
              <div class="col-sm-12">
                <div class="titulo-principal">
                  <h2>Su Pedido</h2>
                </div>
              </div>  
            </div>

            <div class="col-sm-12 compra">
              <div class="table-responsive">
                <table class="table table-striped jambo_table">
                  <thead>
                    <tr class="headings">
                      <th class="column-title">Producto</th>
                      <th class="column-title">Precio Unitario</th>
                      <th class="column-title">Cantidad</th>
                      <th class="column-title no-link last">Subtotal</th>                 
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

                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</td>
                        <td>S/. <?php echo number_format($_smarty_tpl->tpl_vars['producto']->value['precio'],2,'.',',');?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value['cantidad'];?>
</td>
                        <td class="last">S/. <?php echo number_format(($_smarty_tpl->tpl_vars['producto']->value['precio']*$_smarty_tpl->tpl_vars['producto']->value['cantidad']),2,'.',',');?>
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
                <button type="submit" class="boton-rosado boton-confirmar">Finalizar Pedido <i class="fas fa-sign-out-alt"></i></button>
                <?php }?>
              </div>
            </div>

          </div>  

        </form>       

      </div>

    </div>

    <?php echo $_smarty_tpl->getSubTemplate ('web/overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  </body>
</html><?php }
}
?>