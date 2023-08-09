<?php /* Smarty version 3.1.27, created on 2021-08-17 22:00:17
         compiled from "C:\xampp\htdocs\cake\styles\templates\panel\blogeditar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1922710949611c1551d7a022_86429200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3542a01ec80626ef6f8ab8fa9aa87fcb395ce785' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\panel\\blogeditar.tpl',
      1 => 1627916504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1922710949611c1551d7a022_86429200',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611c1551e01b94_06212718',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611c1551e01b94_06212718')) {
function content_611c1551e01b94_06212718 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1922710949611c1551d7a022_86429200';
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

                    <span class="help-block">
                      <a href="panelblog.html"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver a la lista de Blog</a>
                    </span>

                    <!-- boton -->
                    <div class="div-boton">
                      <button type="button" class="btn btn-success" id="guardar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Guardar Datos</button>
                        <span id="mensaje"></span>
                    </div>
                    <!-- fin boton --> 
                    
                    <!--contenido -->
                    <div class="panel panel-primary">
            
                      <div class="panel-heading">
                          <div class="panel-title">Editar Entrada de Blog</div>
                      </div>  
                        
                      <div class="panel-body">
                        <form id="formulario" class="form form-horizontal periodico" role="form" enctype="multipart/form-data">

                          <div class="row">
                            <!-- principal -->
                            <div class="col-md-12"> 

                              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
">

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Fecha de publicacion
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="hidden" id="fecha-actual" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['fecha'];?>
">
                                <input type="text" class="form-control" id="fecha" name="fecha">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Titulo
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['titulo'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Url
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="url" name="url" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['url'];?>
">
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- imagen -->
                              <span class="help-block">
                                Imagen opcional - tamaño recomendado 900 x 400 px
                              </span>
                              <input type="file" id="imagen" class="input-imagen" name="imagen" />
                              <div class="div-imagen" style="min-height:200px;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                <?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen'] == '') {?>
                                  <img id="imagen_preview" class="img-responsive preview-image" />
                                <?php } else { ?>
                                  <img id="imagen_preview" class="img-responsive preview-image" src="<?php echo $_smarty_tpl->tpl_vars['datos']->value['imagen'];?>
" />
                                <?php }?>
                                <span id="imagen_span"><?php if ($_smarty_tpl->tpl_vars['datos']->value['imagen'] == '') {?>Añadir la imagen (900 x 400 px)<?php }?></span>
                              </div>                                        
                              <!-- fin imagen -->  

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Autor - opcional
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['autor'];?>
">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Resumen
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea class="form-control" id="resumen" name="resumen"><?php echo $_smarty_tpl->tpl_vars['datos']->value['resumen'];?>
</textarea>
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- texto multilinea -->
                              <span class="help-block">
                                Texto
                              </span>
                              <div class="input-group ckeditor-texto">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea id="texto" name="texto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['datos']->value['texto'];?>
</textarea>
                              </div>
                              <!-- end texto multilinea -->                               
                                                                         

                            </div>
                            <!-- end principal -->
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

      var fecha = $("#fecha-actual").val();
      $("#fecha").datepicker({ dateFormat: "yy-mm-dd"}).datepicker("setDate", new Date(fecha));

      autosize($('textarea'));

      CKEDITOR.config.stylesSet = [
        { name: 'Subtitulo', element: 'h4' },
        { name: 'Parrafo', element: 'p' }
      ];

      //CKEDITOR.config.colorButton_colors = 'C6342D,000000';
      CKEDITOR.config.extraPlugins = 'autogrow';
      CKEDITOR.config.autoGrow_minHeight = 200;

      CKEDITOR.addCss('.cke_editable h4{font-size: 18px;} .cke_editable p{font-size: 14px;} .cke_editable ul li{font-size: 14px;}');

      CKEDITOR.inline('texto',
        {
          filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&lang=es&relative_url=1&editor=ckeditor&fldr=img/blog/',
          filebrowserUploadUrl : 'filemanager/dialog.php?type=2&lang=es&relative_url=1&editor=ckeditor&fldr=img/blog/',
          filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=2&lang=es&relative_url=1&editor=ckeditor&fldr=img/blog/',
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
      );

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

      $('#titulo').bind('keyup change', function() {
        var titulo = $('#titulo').val();
        titulo =  normalize(titulo);

        //console.log(titulo);
        $('#url').val(titulo);
      });
                      
      $("#guardar").click(function(){  

        for(var instanceName in CKEDITOR.instances){
          CKEDITOR.instances[instanceName].updateElement();
        }  

        var formData = new FormData($('#formulario')[0]);

        $.ajax({
          url: "panelblogeditar.html",
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
              $('#mensaje').html('Entrada de blog actualizada.');
            }
            else if(datos == 3) {
              $("#mensaje").css("color", "red");
              $('#mensaje').html('El url ingresado ya existe...');
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