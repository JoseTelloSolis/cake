<?php /* Smarty version 3.1.27, created on 2021-08-07 08:42:13
         compiled from "C:\xampp\htdocs\cake\styles\templates\panel\empleados.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1178939279610e2b4569c080_23296882%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e286fd49cd6223cd00d15d4966558d1f35e5831' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\panel\\empleados.tpl',
      1 => 1624605099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1178939279610e2b4569c080_23296882',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_610e2b456c9763_77352010',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_610e2b456c9763_77352010')) {
function content_610e2b456c9763_77352010 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1178939279610e2b4569c080_23296882';
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

                    <!--contenido -->
                    <div class="panel panel-primary">
            
                      <div class="panel-heading">
                        <div class="panel-title">Administrar Empleados</div>
                      </div>  
                        
                      <div class="panel-body">
                        <div class="table-responsive">
                            
                          <a href="panelempleadoscrear.html" class="btn btn-success btn-md"><i class="fa fa-file"></i> Añadir Nuevo</a> <span id="mensaje"></span>

                          <br>
                          <br>
                            
                          <table id="tabla-listado" class="tabla-listado table table-striped">
                            <thead>
                              <tr>
                                <th><i class="fa fa-picture-o"></th>
                                <th>Nombre</th>
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
        <?php echo $_smarty_tpl->getSubTemplate ('panel/overall/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <!-- /footer content -->
      </div>
    </div>

  </body>

  <?php echo $_smarty_tpl->getSubTemplate ('panel/overall/librerias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


  <?php echo '<script'; ?>
>    
      
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
        "editar" : "panelempleadoseditar.html"
      };

      $.ajax({
        data:  parametros,
        url:   'panelempleados.html',
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
              
        var confirmacion = confirm("Esta por eliminar un empleado. ¿Aún desea hacerlo?");
        
        if(confirmacion == true) {
          var id = $(this).attr("data-rel");
          var tabla = 'empleados';
      
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
                $('#mensaje').html('Empleado eliminado.');

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

      var fixHelper = function(e, ui) {
        ui.children().each(function() {
          $(this).width($(this).width());
        });
        return ui;
      };

      $("#tabla-listado tbody").sortable({
        helper: fixHelper,
        update: function( event, ui ) {
            
          var contador = 1;

          var listado = [];
          var tabla = 'empleados';

          $('#tabla-listado tbody tr').each(function(){
            var id = $(this).attr("data-rel");
            
            item = {};
            item['orden'] = contador;
            item['id'] = id;
            listado.push(JSON.stringify(item));

            contador++;
          });

          $.ajax({
            data:  {'listado[]': listado, tabla},
            url:   'ordenar',
            type:  'post',
            beforeSend: function() {
              console.log("procesando");
            },
            success: function(datos) {
              //completo
              if(parseInt(datos) == 1){
                console.log("orden OK");
              }
              else{
                //los datos son incorrectos
                console.log("no se pudo ordenar");
              }
            },
            error: function(xhr) {
              console.log("error");
            }
          });
        }
      }).disableSelection();    

    });
    
  <?php echo '</script'; ?>
>
</html>
<?php }
}
?>