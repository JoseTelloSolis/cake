<?php /* Smarty version 3.1.27, created on 2021-08-03 10:56:08
         compiled from "C:\xampp\htdocs\cake\styles\templates\panel\portada.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1300757946610904a85a5246_08452048%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '680cb8a822bccc0cb82ef0ad386e5b7d2d663c99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\panel\\portada.tpl',
      1 => 1624548649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1300757946610904a85a5246_08452048',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_610904a861a5c6_55338857',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_610904a861a5c6_55338857')) {
function content_610904a861a5c6_55338857 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1300757946610904a85a5246_08452048';
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

                <div class="row">
                  <div class="col-sm-12">                   

                    <!-- boton -->
                    <div class="div-boton">
                      <button type="button" class="btn btn-success" id="guardar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Guardar Datos</button>
                        <span id="mensaje"></span>
                    </div>
                    <!-- fin boton --> 
                    
                    <!--contenido -->
                    <div class="panel panel-primary">
            
                      <div class="panel-heading">
                          <div class="panel-title">Editar Portada</div>
                      </div>  
                        
                      <div class="panel-body">
                        <form id="formulario" class="form form-horizontal periodico" role="form" enctype="multipart/form-data">

                          <div class="row">
                            <div class="col-md-6">

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo - Seccion 1
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo_seccion1" name="titulo_seccion1" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo_seccion1'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto 1 - Seccion 1 
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto1_seccion1" name="texto1_seccion1" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto1_seccion1'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea --> 

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto 2 - Seccion 1 
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto2_seccion1" name="texto2_seccion1" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto2_seccion1'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea --> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Boton Texto - Seccion 1 (opcional, dejar en blanco para no mostrar el boton)
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="boton_seccion1" name="boton_seccion1" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['boton_seccion1'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Boton Enlace - Seccion 1
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="enlace_seccion1" name="enlace_seccion1" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['enlace_seccion1'];?>
">
                              </div>
                              <!-- fin texto linea simple -->

                            </div> 

                            <div class="col-md-6">
                              <!-- imagen -->
                              <span class="help-block">
                                Imagen - tamaño recomendado 500 x 350 px
                              </span>
                              <input type="file" id="imagen_seccion1" class="input-imagen" name="imagen_seccion1" />
                              <div class="div-imagen" style="min-height:200px;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                <?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen_seccion1'] == '') {?>
                                  <img id="imagen_seccion1_preview" class="img-responsive preview-image" />
                                <?php } else { ?>
                                  <img id="imagen_seccion1_preview" class="img-responsive preview-image" src="<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen_seccion1'];?>
" />
                                <?php }?>
                                <span id="imagen_seccion1_span"><?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen_seccion1'] == '') {?>Añadir la imagen (500 x 350 px)<?php }?></span>
                              </div>                                        
                              <!-- fin imagen -->  
                            </div> 
                          </div>

                          <hr>

                          <div class="row">
                            <div class="col-md-12">
                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo - Seccion 2
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo_seccion2" name="titulo_seccion2" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo_seccion2'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto - Seccion 2
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto_seccion2" name="texto_seccion2" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto_seccion2'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea --> 
                            </div>
                          </div>

                          <hr>

                          <div class="row">
                            <div class="col-md-6">
                              <!-- imagen -->
                              <span class="help-block">
                                Imagen - tamaño recomendado 400 x 400 px
                              </span>
                              <input type="file" id="imagen_seccion3" class="input-imagen" name="imagen_seccion3" />
                              <div class="div-imagen" style="min-height:200px;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                <?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen_seccion3'] == '') {?>
                                  <img id="imagen_seccion3_preview" class="img-responsive preview-image" />
                                <?php } else { ?>
                                  <img id="imagen_seccion3_preview" class="img-responsive preview-image" src="<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen_seccion3'];?>
" />
                                <?php }?>
                                <span id="imagen_seccion3_span"><?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen_seccion3'] == '') {?>Añadir la imagen (400 x 400 px)<?php }?></span>
                              </div>                                        
                              <!-- fin imagen -->
                            </div>

                            <div class="col-md-6">
                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo - Seccion 3
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo_seccion3" name="titulo_seccion3" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo_seccion3'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto - Seccion 3 
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto_seccion3" name="texto_seccion3" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto_seccion3'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea --> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Boton Texto - Seccion 3 (opcional, dejar en blanco para no mostrar el boton)
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="boton_seccion3" name="boton_seccion3" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['boton_seccion3'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Boton Enlace - Seccion 3
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="enlace_seccion3" name="enlace_seccion3" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['enlace_seccion3'];?>
">
                              </div>
                              <!-- fin texto linea simple -->
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12 text-center">
                              <!-- imagen -->
                              <span class="help-block">
                                Imagen de fondo - tamaño recomendado 1900 x 1300 px
                              </span>
                              <input type="file" id="fondo_seccion3" class="input-imagen" name="fondo_seccion3" />
                              <div class="div-imagen" style="min-height:200px;margin:0 auto;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                <?php if ($_smarty_tpl->tpl_vars['datos']->value['fondo_seccion3'] == '') {?>
                                  <img id="fondo_seccion3_preview" class="img-responsive preview-image" />
                                <?php } else { ?>
                                  <img id="fondo_seccion3_preview" class="img-responsive preview-image" src="<?php echo $_smarty_tpl->tpl_vars['datos']->value['fondo_seccion3'];?>
" />
                                <?php }?>
                                <span id="fondo_seccion3_span"><?php if ($_smarty_tpl->tpl_vars['datos']->value['fondo_seccion3'] == '') {?>Añadir la imagen (1900 x 1300 px)<?php }?></span>
                              </div>                                        
                              <!-- fin imagen -->
                            </div>
                          </div>

                          <hr>

                          <div class="row">
                            <div class="col-md-12">
                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo - Seccion 4
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control text-center" id="titulo_seccion4" name="titulo_seccion4" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo_seccion4'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">

                              <!-- imagen -->
                              <span class="help-block">
                                Imagen - tamaño recomendado 200 x 200 px
                              </span>
                              <input type="file" id="imagen1_seccion4" class="input-imagen" name="imagen1_seccion4" />
                              <div class="div-imagen" style="min-height:200px;margin:0 auto;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                <?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen1_seccion4'] == '') {?>
                                  <img id="imagen1_seccion4_preview" class="img-responsive preview-image" style="background-color: black;" />
                                <?php } else { ?>
                                  <img id="imagen1_seccion4_preview" class="img-responsive preview-image" src="<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen1_seccion4'];?>
" style="background-color: black;" />
                                <?php }?>
                                <span id="imagen1_seccion4_span"><?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen1_seccion4'] == '') {?>Añadir la imagen (200 x 200 px)<?php }?></span>
                              </div>                                        
                              <!-- fin imagen -->

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo 1 - Seccion 4
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo1_seccion4" name="titulo1_seccion4" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo1_seccion4'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto 1 - Seccion 4
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto1_seccion4" name="texto1_seccion4" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto1_seccion4'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea -->   

                            </div>

                            <div class="col-md-4">

                              <!-- imagen -->
                              <span class="help-block">
                                Imagen - tamaño recomendado 200 x 200 px
                              </span>
                              <input type="file" id="imagen2_seccion4" class="input-imagen" name="imagen2_seccion4" />
                              <div class="div-imagen" style="min-height:200px;margin:0 auto;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                <?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen2_seccion4'] == '') {?>
                                  <img id="imagen2_seccion4_preview" class="img-responsive preview-image" style="background-color: black;" />
                                <?php } else { ?>
                                  <img id="imagen2_seccion4_preview" class="img-responsive preview-image" src="<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen2_seccion4'];?>
" style="background-color: black;" />
                                <?php }?>
                                <span id="imagen2_seccion4_span"><?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen2_seccion4'] == '') {?>Añadir la imagen (200 x 200 px)<?php }?></span>
                              </div>                                        
                              <!-- fin imagen -->

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo 2 - Seccion 4
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo2_seccion4" name="titulo2_seccion4" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo2_seccion4'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto 2 - Seccion 4
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto2_seccion4" name="texto2_seccion4" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto2_seccion4'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea -->   

                            </div>

                            <div class="col-md-4">

                              <!-- imagen -->
                              <span class="help-block">
                                Imagen - tamaño recomendado 200 x 200 px
                              </span>
                              <input type="file" id="imagen3_seccion4" class="input-imagen" name="imagen3_seccion4" />
                              <div class="div-imagen" style="min-height:200px;margin:0 auto;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                <?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen3_seccion4'] == '') {?>
                                  <img id="imagen3_seccion4_preview" class="img-responsive preview-image" style="background-color: black;" />
                                <?php } else { ?>
                                  <img id="imagen3_seccion4_preview" class="img-responsive preview-image" src="<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen3_seccion4'];?>
" style="background-color: black;" />
                                <?php }?>
                                <span id="imagen3_seccion4_span"><?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen3_seccion4'] == '') {?>Añadir la imagen (200 x 200 px)<?php }?></span>
                              </div>                                        
                              <!-- fin imagen -->

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo 3 - Seccion 4
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo3_seccion4" name="titulo3_seccion4" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo3_seccion4'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto 3 - Seccion 4
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto3_seccion4" name="texto3_seccion4" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto3_seccion4'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea -->   

                            </div>

                          </div>

                          <hr>

                          <div class="row">
                            <div class="col-md-12">
                              
                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo - Seccion 5
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo_seccion5" name="titulo_seccion5" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo_seccion5'];?>
">
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto - Seccion 5
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto_seccion5" name="texto_seccion5" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto_seccion5'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea --> 

                            </div>
                          </div>

                          <hr>

                          <div class="row">
                            <div class="col-md-12">
                              
                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo - Seccion 6
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo_seccion6" name="titulo_seccion6" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo_seccion6'];?>
">
                              </div>
                              <!-- fin texto linea simple -->                              

                            </div>
                          </div>

                          <hr>

                          <div class="row">
                            <div class="col-md-12">
                              
                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo - Seccion 7
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo_seccion7" name="titulo_seccion7" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo_seccion7'];?>
">
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto - Seccion 7
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto_seccion7" name="texto_seccion7" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto_seccion7'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea --> 

                            </div>
                          </div>

                        </form>
                      </div>

                    </div>
                    <!-- end contenido -->
                  </div>
                </div>

              </div>
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

  </body>

  <?php echo $_smarty_tpl->getSubTemplate ('panel/overall/librerias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link href="wickedpicker/dist/wickedpicker.min.css" rel="stylesheet" media="screen">
  <?php echo '<script'; ?>
 type="text/javascript" src="wickedpicker/dist/wickedpicker.min.js"><?php echo '</script'; ?>
>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"><?php echo '</script'; ?>
>
  
  <link rel="stylesheet" type="text/css" href="styles/librerias/fancybox/source/jquery.fancybox.css?v=2.1.7" media="screen" />
  <?php echo '<script'; ?>
 type="text/javascript" src="styles/librerias/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="styles/librerias/jscolor/jscolor.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>    
       
    var normalize = (function() {
      var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç", 
          to   = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
          mapping = {};
     
      for(var i = 0, j = from.length; i < j; i++)
        mapping[from.charAt(i)] = to.charAt(i);
     
      return function(str) {
        var ret = [];
        for(var i = 0, j = str.length; i < j; i++) {
          var c = str.charAt(i);
          if(mapping.hasOwnProperty(str.charAt(i)))
            ret.push(mapping[c]);
          else
            ret.push(c);
        }      
        return ret.join( '' ).replace( /[^-A-Za-z0-9]+/g, '-' ).toLowerCase();
      }
     
    })();

    $(document).ready( function() {

      $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
      };
      $.datepicker.setDefaults($.datepicker.regional['es']);

      /*var fecha = $("#fecha-actual").val();
      $("#fecha").datepicker({ dateFormat: "yy-mm-dd"}).datepicker("setDate", new Date(fecha));*/

      autosize($('textarea'));

      CKEDITOR.config.stylesSet = [
        { name: 'Subtitulo', element: 'h4' },
        { name: 'Parrafo', element: 'p' }
      ];

      //CKEDITOR.config.colorButton_colors = 'C6342D,000000';
      CKEDITOR.config.extraPlugins = 'autogrow';
      CKEDITOR.config.autoGrow_minHeight = 200;

      CKEDITOR.addCss('.cke_editable h4{font-size: 18px;} .cke_editable p{font-size: 14px;} .cke_editable ul li{font-size: 14px;}');

      /*CKEDITOR.inline('texto',
        {
          filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&lang=es&relative_url=1&editor=ckeditor&fldr=img/noticias/contenido/',
          filebrowserUploadUrl : 'filemanager/dialog.php?type=2&lang=es&relative_url=1&editor=ckeditor&fldr=img/noticias/contenido/',
          filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=2&lang=es&relative_url=1&editor=ckeditor&fldr=img/noticias/contenido/',
          toolbar :
            [
              { name: 'basicstyles', items : [ 'Bold', 'Italic', 'RemoveFormat' ] },
              { name: 'links', items : [ 'Link', 'Unlink' ] },
              //{ name: 'colors', items: [ 'TextColor' ] },
              { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
              { name: 'styles', items: [ 'Styles' ] },
              { name: 'insert', items : [ 'Image' ] },
              { name: 'document', items: [ 'Source' ] }
            ]    
        }
      );*/

      $('[data-toggle="tooltip"]').tooltip(); 

      function readURL(input, target) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          var image_target = $(target);
          reader.onload = function (e) {
              image_target.attr('src', e.target.result).show();
          };
          reader.readAsDataURL(input.files[0]);
        }
      }

      $(".div-imagen").click(function(){
          $(this).prev('.input-imagen').trigger('click');
      });

      $(".input-imagen").on("change",function(){
          id = $(this).attr('id');
          readURL(this, "#"+id+"_preview");
          $("#"+id+"_span").html('');
      });

      /*$('#titulo').bind('keyup change', function() {
        var titulo = $('#titulo').val();
        titulo =  normalize(titulo);

        //console.log(titulo);
        $('#url').val(titulo);
      });*/
                      
      $("#guardar").click(function(){  

        /*for(var instanceName in CKEDITOR.instances){
          CKEDITOR.instances[instanceName].updateElement();
        }*/   

        var formData = new FormData($('#formulario')[0]);

        $.ajax({
          url: "panelportada.html",
          type: "POST",
          cache: false,
          contentType: false,
          processData: false,
          data: formData,
          success: function(datos) {
            console.log(datos);
            //completo
            if(parseInt(datos) == 1){
              $("#mensaje").css("color", "green");
              $('#mensaje').html('Datos actualizados.');
            }
            else{
              //los datos son incorrectos
              $("#mensaje").css("color", "red");
              $('#mensaje').html('Error. No se pudo guardar...');
            }
          },       
          error: function(xhr) {
            //ocurrio un error
            //$("#mensaje").css("color", "red");
            console.log('Ocurrio un error.');
          },
          xhr: function(){
            // get the native XmlHttpRequest object
            var xhr = $.ajaxSettings.xhr() ;
            // set the onprogress event handler
            xhr.upload.onprogress = function(evt){ 
                //console.log('progress', evt.loaded/evt.total*100)
                $("#mensaje").css("color", "green");
                $('#mensaje').html('Procesando: ' + parseInt(evt.loaded/evt.total*100) + '%');
            };
            // set the onload event handler
            xhr.upload.onload = function(){ console.log('Completado!') } ;
            // return the customized object
            return xhr ;
          }     
        });
          
      });

    });

    $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
    
  <?php echo '</script'; ?>
>
</html>
<?php }
}
?>