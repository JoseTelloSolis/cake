<?php /* Smarty version 3.1.27, created on 2021-08-03 07:58:49
         compiled from "C:\xampp\htdocs\cake\styles\templates\panel\overall\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7035832346108db19ddc747_09224891%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '417f8a406b1f78339d0887e193d1d3aaa9761472' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\panel\\overall\\header.tpl',
      1 => 1502765336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7035832346108db19ddc747_09224891',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6108db19e93332_48369875',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6108db19e93332_48369875')) {
function content_6108db19e93332_48369875 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7035832346108db19ddc747_09224891';
?>
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Bienvenido: <?php echo $_SESSION['user'];?>

                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="panelcambiarpass.html"> Cambiar Contraseña</a></li>
                                        <li><a href="panellogout.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div><?php }
}
?>