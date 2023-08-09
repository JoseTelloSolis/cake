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

                    <!--contenido -->
                    <div class="panel panel-primary">
            
                      <div class="panel-heading">
                        <div class="panel-title">Administrar Blog</div>
                      </div>  
                        
                      <div class="panel-body">
                        <div class="table-responsive">
                            
                          <a href="panelblogcrear.html" class="btn btn-success btn-md"><i class="fa fa-file"></i> Añadir Nuevo</a> <span id="mensaje"></span>

                          <br>
                          <br>
                            
                          <table id="tabla-listado" class="tabla-listado table table-striped">
                            <thead>
                              <tr>
                                <th>Titulo</th>
                                <th>Autor</th>
                                <th>Fecha</th>
                                <th></th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody id="listado">
                                                                
                            </tbody>
                          </table>
                        </div>

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

  <script>    
    {literal}  
    $.urlParam = function(name){
      var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
      if (results==null){
        return 1;
      }
      else{
        return decodeURI(results[1]) || 0;
      }
    }    

    function cargar(){

      var parametros = {
        "editar" : "panelblogeditar.html"
      };

      $.ajax({
        data:  parametros,
        url:   'panelblog.html',
        type:  'post',
        beforeSend: function() {
          //cargando
          $('#listado').html('Cargando...');
        },
        success:  function(datos) {
          console.log(datos);
          if(parseInt(datos) == 2){
            //los datos son incorrectos
            $('#listado').html('La lista esta vacia...');
          }
          else{
            $('#listado').html(datos);
          }
        },
        error: function(xhr) {
          //ocurrio un error
          $('#listado').html('Ocurrio un error.');
        }
      });
    }


    $(document).ready( function() {
      cargar();  

      $('#listado').on('click', '.eliminar', function (){
              
        var confirmacion = confirm("Esta por eliminar una entrada de blog. ¿Aún desea hacerlo?");
        
        if(confirmacion == true) {
          var id = $(this).attr("data-rel");
          var tabla = 'blog';
      
          var parametros = {
            "id" : id,
            "tabla" : tabla
          };
          
          $.ajax({
            data:  parametros,
            url:   'eliminar.html',
            type:  'post',
            success:  function(datos) {
              if(parseInt(datos) == 1){
                $("#mensaje").css("color", "green");
                $('#mensaje').html('Entrada de blog eliminada.');

                //recargar tabla
                cargar();
              }
              else{
                console.log('Ocurrio un error...');
              }
            }
          });
        }
          
      });   

    });
    {/literal}
  </script>
</html>
