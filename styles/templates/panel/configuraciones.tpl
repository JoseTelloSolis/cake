<!DOCTYPE html>
<html lang="en">
  <head>
    {include 'panel/overall/head.tpl'}

    <style type="text/css">
      .preview-image {
        max-width: 100px;
      }
      .switchery {
        width: 32px !important;
        height: 20px !important;
      }
      .switchery>small {
        height: 20px !important;
        width: 20px !important;
      }
    </style>

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          {include 'panel/overall/menu.tpl'}
        </div>

        <!-- top navigation -->
        {include 'panel/overall/header.tpl'}
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
                        <div class="panel-title">Configuraciones</div>
                      </div>  
                      
                      <div class="panel-body">
                        <form id="formulario" class="form form-horizontal periodico" role="form" enctype="multipart/form-data">

                          <div class="row">
                            <div class="col-lg-12"> 

                              <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                                <li role="presentation"><a href="#redes" aria-controls="redes" role="tab" data-toggle="tab">Redes Sociales</a></li>         
                              </ul>

                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="general">
                                  <!-- imagen -->
                                  <span class="help-block">
                                    Logo - tamaño recomendado 300 x 150 px
                                  </span>
                                  <input type="file" id="imagen" class="input-imagen" name="imagen" />
                                  <div class="div-imagen" style="min-height:100px;background-image: none;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                    {if $datos.logo eq ""}
                                      <img id="imagen_preview" class="img-responsive preview-image" style="max-width: 450px;" />
                                      <span id="imagen_span">{if $datos.logo eq ''}Añadir la imagen (300 x 150 px){/if}</span>
                                    {else}
                                      <img id="imagen_preview" class="img-responsive preview-image" style="max-width: 450px;" src="{$datos.logo}" />
                                      <span id="imagen_span"></span>
                                    {/if}                                
                                  </div>                                        
                                  <!-- fin imagen --> 

                                  <!-- imagen -->
                                  <span class="help-block">
                                    Logo mobile - tamaño recomendado 500 x 100 px
                                  </span>
                                  <input type="file" id="imagen2" class="input-imagen" name="imagen2" />
                                  <div class="div-imagen" style="min-height:100px;background-image: none;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                    {if $datos.logo_mini eq ""}
                                      <img id="imagen2_preview" class="img-responsive preview-image" style="max-width: 450px;" />
                                      <span id="imagen2_span">{if $datos.logo_mini eq ''}Añadir la imagen (500 x 100 px){/if}</span>
                                    {else}
                                      <img id="imagen2_preview" class="img-responsive preview-image" style="max-width: 450px;" src="{$datos.logo_mini}" />
                                      <span id="imagen2_span"></span>
                                    {/if}                                
                                  </div>                                        
                                  <!-- fin imagen -->

                                  <!-- texto linea simple -->
                                  <span class="help-block">
                                    Email de contacto
                                  </span>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <input type="text" class="form-control" id="email" name="email" value="{$datos.email}">
                                  </div>
                                  <!-- fin texto linea simple -->         

                                  <!-- texto linea simple -->
                                  <span class="help-block">
                                    Telefono
                                  </span>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <input type="text" class="form-control" id="telefono" name="telefono" value="{$datos.telefono}">
                                  </div>
                                  <!-- fin texto linea simple -->

                                  <!-- texto linea simple -->
                                  <span class="help-block">
                                    Direccion
                                  </span>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <textarea class="form-control" id="direccion" name="direccion">{$datos.direccion}</textarea>
                                  </div>
                                  <!-- fin texto linea simple --> 

                                  <!-- texto linea simple -->
                                  <span class="help-block">
                                    Horario de atencion
                                  </span>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <textarea class="form-control" id="horario" name="horario">{$datos.horario}</textarea>
                                  </div>
                                  <!-- fin texto linea simple --> 

                                  <!-- texto linea simple -->
                                  <span class="help-block">
                                    Texto Footer
                                  </span>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <textarea class="form-control" id="texto" name="texto">{$datos.texto}</textarea>
                                  </div>
                                  <!-- fin texto linea simple --> 

                                </div>

                                <div role="tabpanel" class="tab-pane" id="redes">
                                  
                                  <!-- texto linea simple -->
                                  <span class="help-block">
                                    Facebook
                                  </span>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <input type="text" class="form-control" id="facebook" name="facebook" value="{$datos.facebook}">
                                  </div>
                                  <!-- fin texto linea simple --> 

                                  <!-- texto linea simple -->
                                  <span class="help-block">
                                    Twitter
                                  </span>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <input type="text" class="form-control" id="twitter" name="twitter" value="{$datos.twitter}">
                                  </div>
                                  <!-- fin texto linea simple -->  

                                  <!-- texto linea simple -->
                                  <span class="help-block">
                                    Instagram
                                  </span>
                                  <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <input type="text" class="form-control" id="instagram" name="instagram" value="{$datos.instagram}">
                                  </div>
                                  <!-- fin texto linea simple --> 
                                  
                                </div>
                                
                              </div>

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
        {include 'panel/overall/footer.tpl'}
        <!-- /footer content -->
      </div>
    </div>

  </body>

  {include 'panel/overall/librerias.tpl'}

  <!-- Switchery -->
  <link href="styles/librerias/switchery/dist/switchery.min.css" rel="stylesheet">
  <script src="styles/librerias/switchery/dist/switchery.min.js"></script>

  <script>    
    {literal}   
    $(document).on('change', '.btn-file :file', function() {
      var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
      input.trigger('fileselect', [numFiles, label]);
    });
       
    $(document).ready( function() {

      autosize($('textarea'));

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

      CKEDITOR.config.stylesSet = [
        { name: 'Subtitulo', element: 'h4' },
        { name: 'Parrafo', element: 'p' }
      ];

      //CKEDITOR.config.colorButton_colors = 'C6342D,000000';
      CKEDITOR.config.extraPlugins = 'autogrow';
      CKEDITOR.config.autoGrow_minHeight = 200;

      CKEDITOR.addCss('.cke_editable h4{font-size: 22px;} .cke_editable p{font-size: 18px;} .cke_editable ul li{font-size: 18px;}');


      CKEDITOR.replace('horario',
        {
          toolbar :
            [
              { name: 'basicstyles', items : [ 'Bold', 'Italic', 'RemoveFormat' ] },
              { name: 'links', items : [ 'Link', 'Unlink' ] },
              //{ name: 'colors', items: [ 'TextColor' ] },
              { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
              { name: 'styles', items: [ 'Styles' ] },
              //{ name: 'insert', items : [ 'Image' ] },
              { name: 'document', items: [ 'Source' ] }
            ]    
        }
      );

      /*$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
              
        var input = $(this).parents('.input-group').find(':text'),
          log = numFiles > 1 ? numFiles + ' fotos seleccionadas' : label;
        
        if(input.length) {
          input.val(log);
        } 
        else {
          //if(log) alert(log);
        }
          
      });*/

      /*var changeCheckbox = document.querySelector('.js-switch');

      changeCheckbox.onchange = function() {

        if(changeCheckbox.checked == 0) {
          $('.checkbox-text').html('Popup desactivado');
        }
        else{
          $('.checkbox-text').html('Popup activado');
        }
      };*/

      $(".div-imagen").click(function(){
        $(this).prev('.input-imagen').trigger('click');
      });

      $(".input-imagen").on("change",function(){
        id = $(this).attr('id');
        readURL(this, "#"+id+"_preview");
        $("#"+id+"_span").html('');
      });
         
      $("#guardar").click(function(){

        //ckeditor crea un iframe, el textarea original esta vacio
        //copiamos los textos de los iframe a sus respectivos
        //textarea antes de enviar con submit
        for(var instanceName in CKEDITOR.instances){
          CKEDITOR.instances[instanceName].updateElement();
        }
        
        var formData = new FormData($('#formulario')[0]);

        $.ajax({
          url: "panelconfiguraciones.html",
          type: "POST",
          cache: false,
          contentType: false,
          processData: false,
          data: formData,
          success: function(datos){
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
          error: function(xhr){
            //ocurrio un error
            //$("#mensaje").css("color", "red");
            console.log('Ocurrio un error.');
          },
          xhr: function(){
            // get the native XmlHttpRequest object
            var xhr = $.ajaxSettings.xhr();
            // set the onprogress event handler
            xhr.upload.onprogress = function(evt){ 
              //console.log('progress', evt.loaded/evt.total*100)
              $("#mensaje").css("color", "green");
              $('#mensaje').html('Procesando: ' + parseInt(evt.loaded/evt.total*100) + '%');
            };
            // set the onload event handler
            xhr.upload.onload = function(){ 
              console.log('Completado!') 
            };
            // return the customized object
            return xhr ;
          }     
        });
          
      });
    });
    {/literal}
  </script>
</html>
