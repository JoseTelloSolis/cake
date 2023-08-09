<!DOCTYPE html>
<html lang="en">
  <head>
    {include 'panel/overall/head.tpl'}
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
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

                    <span class="help-block">
                      <a href="panelcategorias.html"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver al listado de Categoria</a>
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
                          <div class="panel-title">Editar Categoria</div>
                      </div>  
                        
                      <div class="panel-body">
                        <form id="formulario" class="form form-horizontal periodico" role="form" enctype="multipart/form-data">

                          <div class="row">
                            <!-- principal -->
                            <div class="col-md-12"> 

                              <input type="hidden" name="id" value="{$datos.id}">

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Categoria
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{$datos.nombre}">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Url
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="url" name="url" value="{$datos.url}">
                              </div>
                              <!-- fin texto linea simple --> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Color - para los bordes y subrayados

                                <button id="default-color" type="button" class="btn btn-primary">Color por defecto</button>
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control jscolor" id="color" name="color" placeholder="Ingrese el color" value="{$datos.color}">
                              </div>
                              <!-- fin texto linea simple -->

                              <style type="text/css">
                                .div-imagen {
                                  max-width: 1000px;
                                }

                                .preview-image {
                                  max-width: 1000px;
                                }
                              </style>  

                              <!-- imagen -->
                              <span class="help-block">
                                Imagen - tamaño recomendado 2000 x 300 px
                              </span>
                              <input type="file" id="imagen" class="input-imagen" name="imagen" />
                              <div class="div-imagen" style="min-height:200px;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                {if $datos.imagen eq ""}
                                  <img id="imagen_preview" class="img-responsive preview-image" />
                                {else}
                                  <img id="imagen_preview" class="img-responsive preview-image" src="{$datos.imagen}" />
                                {/if}
                                <span id="imagen_span">{if $datos.imagen eq ''}Añadir la imagen (2000 x 300 px){/if}</span>
                              </div>                                        
                              <!-- fin imagen -->                 

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
        {include 'panel/overall/footer.tpl'}
        <!-- /footer content -->
      </div>
    </div>

  </body>

  {include 'panel/overall/librerias.tpl'}

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <link href="wickedpicker/dist/wickedpicker.min.css" rel="stylesheet" media="screen">
  <script type="text/javascript" src="wickedpicker/dist/wickedpicker.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="styles/librerias/fancybox/source/jquery.fancybox.css?v=2.1.7" media="screen" />
  <script type="text/javascript" src="styles/librerias/fancybox/source/jquery.fancybox.pack.js?v=2.1.7"></script>

  <script src="styles/librerias/jscolor/jscolor.js"></script>

  <script>    
    {literal}   
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

      $(".div-imagen").click(function(){
          $(this).prev('.input-imagen').trigger('click');
      });

      $(".input-imagen").on("change",function(){
          id = $(this).attr('id');
          readURL(this, "#"+id+"_preview");
          $("#"+id+"_span").html('');
      });

      $('#nombre').bind('keyup change', function() {
        var nombre = $('#nombre').val();
        nombre =  normalize(nombre);

        //console.log(titulo);
        $('#url').val(nombre);
      });

      $('#default-color').click(function(){
        document.getElementById('color').jscolor.fromString('33f1b7');
      });
                      
      $("#guardar").click(function(){      

        var formData = new FormData($('#formulario')[0]);

        $.ajax({
          url: "panelcategoriaseditar.html",
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
              $('#mensaje').html('Categoria actualizada.');
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
    {/literal}
  </script>
</html>
