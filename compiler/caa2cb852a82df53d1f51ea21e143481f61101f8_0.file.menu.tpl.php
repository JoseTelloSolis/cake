<?php /* Smarty version 3.1.27, created on 2021-08-03 07:58:49
         compiled from "C:\xampp\htdocs\cake\styles\templates\panel\overall\menu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5557898326108db19dad3d9_88882650%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caa2cb852a82df53d1f51ea21e143481f61101f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\panel\\overall\\menu.tpl',
      1 => 1627886150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5557898326108db19dad3d9_88882650',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6108db19dcb444_93260401',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6108db19dcb444_93260401')) {
function content_6108db19dcb444_93260401 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5557898326108db19dad3d9_88882650';
?>
          <div class="left_col scroll-view">
            <div class="navbar nav_title logo-md" style="border: 0;">
              <a href="panelinicio.html" class="site_title"><img src="styles/images/logo.png" class="img-responsive"></a>
            </div>
            <div class="navbar nav_title logo-sm" style="border: 0;">
              <a href="panelinicio.html" class="site_title"><img src="styles/images/logo_mini.png" class="img-responsive"></a>
            </div>

            <div class="clearfix"></div>

            <br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu Principal</h3>
                <ul class="nav side-menu">
                  <li><a href="panelconfiguraciones.html"><i class="fa fa-cog"></i> Configuraciones</a></li>
                  
                  <li><a><i class="fa fa-home"></i> Portada <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="panelportadaslider.html">Slider</a></li>
                      <li><a href="panelportada.html">Textos</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-cubes"></i> Productos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="panelproductostextos.html">Textos</a></li>
                      <li><a href="panelproductos.html">Productos</a></li>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-pencil-square-o"></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="panelblogtextos.html">Textos</a></li>
                      <li><a href="panelblog.html">Blog</a></li>
                    </ul>
                  </li>

                  <li><a href="paneltestimonios.html"><i class="fa fa-file-text-o"></i> Testimonios</a></li>

                  <li><a href="panelempleados.html"><i class="fa fa-users"></i> Empleados</a></li>

                  <li><a href="panelgaleria.html"><i class="fa fa-picture-o"></i> Galeria</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div><?php }
}
?>