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
                      <a href="panelproductos.html"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver a la lista de Productos</a>
                    </span>

                    <!-- boton -->
                    <div class="div-boton">
                      <button type="button" class="btn btn-success" id="guardar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Guardar Datos</button>
                      <span id="mensaje"></span>
                    </div>
                    <!-- fin boton --> 
                                        
                    <!--contenido -->
                    <div class="panel panel-primary fondo-gris">
            
                      <div class="panel-heading">
                        <div class="panel-title">Crear Producto</div>
                      </div>  
                        
                      <div class="panel-body">
                        <form id="formulario" class="form form-horizontal periodico" role="form" enctype="multipart/form-data">

                          <div class="row">
                            <!-- principal -->
                            <div class="col-md-12"> 

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Nombre
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="nombre" name="nombre">
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Url
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="text" class="form-control" id="url" name="url">
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- imagen -->
                              <span class="help-block">
                                Imagen opcional - tamaño recomendado 550 x 450 px
                              </span>
                              <input type="file" id="imagen" class="input-imagen" name="imagen" />
                              <div class="div-imagen" style="min-height:200px;" data-toggle="tooltip" data-placement="top" title="Clic en la imagen para reemplazarla">
                                <img id="imagen_preview" class="img-responsive preview-image" />
                                <span id="imagen_span">Añadir la imagen (550 x 450 px)</span>
                              </div>                                        
                              <!-- fin imagen -->                                

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Precio
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="number" class="form-control" id="precio" name="precio" value="0">
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Stock
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <input type="number" class="form-control" id="stock" name="stock" value="1">
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Resumen
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea class="form-control" id="resumen" name="resumen"></textarea>
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Descripcion
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                              </div>
                              <!-- fin texto linea simple -->

                              <!-- texto linea simple -->
                              <span class="help-block">
                                Descripcion opcional
                              </span>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                <textarea class="form-control" id="descripcion_opcional" name="descripcion_opcional"></textarea>
                              </div>
                              <!-- fin texto linea simple -->                  
                                                            

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

      //$("#fecha").datepicker({ dateFormat: "yy-mm-dd"}).datepicker("setDate", "0");

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

      $('#nombre').bind('keyup change', function() {
        var nombre = $('#nombre').val();
        nombre =  normalize(nombre);

        //console.log(titulo);
        $('#url').val(nombre);
      });
                        
      $("#guardar").click(function(){

        /*for(var instanceName in CKEDITOR.instances){
          CKEDITOR.instances[instanceName].updateElement();
        }*/
          
        var formData = new FormData($('#formulario')[0]);

        $.ajax({
            url: "panelproductoscrear.html",
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function(datos) {
              console.log(datos);
              //completo
              if(datos == 1){
                $("#mensaje").css("color", "green");
                $('#mensaje').html('Producto creado.');

                setTimeout(function(){ 
                    window.location.href = 'panelproductos.html';
                }, 1000);
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
