<?php /* Smarty version 3.1.27, created on 2021-08-17 19:33:48
         compiled from "C:\xampp\htdocs\cake\styles\templates\web\gracias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:748338928611bf2fcb8bf73_29573064%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78934de727c21bcee49f108f74c14ed938961df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\web\\gracias.tpl',
      1 => 1629221627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '748338928611bf2fcb8bf73_29573064',
  'variables' => 
  array (
    'datosProductosTextos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611bf2fcbedeb4_55760978',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611bf2fcbedeb4_55760978')) {
function content_611bf2fcbedeb4_55760978 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '748338928611bf2fcb8bf73_29573064';
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
              <h3>Gracias</h3>
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
                  <a href="javascript:void(0);" class="selected" isdone="1" rel="3">
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
            <a href="productos.html" class="volver"><i class="fas fa-reply"></i> Volver</a>
          </div>
        </div>
      </div>

      <div class="container div-bienvenidos pt-5 pb-5">
        <div class="row">

          <div class="col-sm-12 compra">
            
            <div class="row">
              <div class="col-sm-12">
                <div class="titulo-principal">
                  <h2>Pedido generado</h2>

                  <p>En breve nos pondremos en contacto con usted...</p>
                </div>
              </div>  
            </div>

            <div class="form-group botones text-right mt-5">
              <a href="index.html" class="btn btn-secondary">Volver al Inicio</a>
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