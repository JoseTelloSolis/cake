<?php /* Smarty version 3.1.27, created on 2021-08-07 08:42:19
         compiled from "C:\xampp\htdocs\cake\styles\templates\panel\inicio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:858602336610e2b4b1214f8_72343178%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2c4463f34fff8565b85b8042c512d7fabb24811' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\panel\\inicio.tpl',
      1 => 1516657614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '858602336610e2b4b1214f8_72343178',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_610e2b4b1780f3_71685124',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_610e2b4b1780f3_71685124')) {
function content_610e2b4b1780f3_71685124 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '858602336610e2b4b1214f8_72343178';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ('panel/overall/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <?php echo $_smarty_tpl->getSubTemplate ('panel/overall/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                </div>

                <!-- top navigation -->
                <?php echo $_smarty_tpl->getSubTemplate ('panel/overall/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="dashboard_graph">

                                <div class="row x_title">
                                    <div class="col-sm-12 text-center">
                                        <h3>¡Bienvenido!</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <br />
                    
                    <div class="row">
                        <div class="col-md-12 text-center">
                            
                            <p>Este sistema permite a usted, como usuario administrador de esta web, manipular el contenido necesario para el correcto funcionamiento de esta web.</p>
                            <p>Este sistema es creado por Xcrivas Comunicaciones y Servicios SRL. Para mayor información o consulta sobre su funcionamiento comunicarse con la empresa.</p>
                            <p>Visite nuestra web <a href="http://www.xcrivas.com/" target="_blank"><strong>www.xcrivas.com</strong></a> para mayor informacion.</p>
                            
                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <?php echo $_smarty_tpl->getSubTemplate ('panel/overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                <!-- /footer content -->
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ('panel/overall/librerias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    
    </body>
</html>
<?php }
}
?>