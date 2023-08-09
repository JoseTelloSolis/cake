<?php /* Smarty version 3.1.27, created on 2021-08-03 10:50:39
         compiled from "C:\xampp\htdocs\cake\styles\templates\panel\portadaSlider.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16058928986109035f5d00d1_77428967%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a17b636665a11ad3081d1581f06d5fca6be0fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\panel\\portadaSlider.tpl',
      1 => 1624344490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16058928986109035f5d00d1_77428967',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6109035f620ba8_61817712',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6109035f620ba8_61817712')) {
function content_6109035f620ba8_61817712 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16058928986109035f5d00d1_77428967';
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
                        <div class="panel-title">Administrar Slider</div>
                      </div>  
                        
                      <div class="panel-body">
                        <div class="table-responsive">
                            
                          <a href="panelportadaslidercrear.html" class="btn btn-success btn-md"><i class="fa fa-file"></i> Añadir Nuevo</a> <span id="mensaje"></span>

                          <br>
                          <br>
                            
                          <table id="tabla-listado" class="tabla-listado table table-striped">
                            <thead>
                              <tr>
                                <th><i class="fa fa-picture-o"></th>
                                <th>Titulo</th>
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
        "editar" : "panelportadaslidereditar.html"
      };

      $.ajax({
        data:  parametros,
        url:   'panelportadaslider.html',
        type:  'post',
        beforeSend: function() {
          //cargando
          $('#listado').html('Cargando...');
        },
        success:  function(datos) {
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
              
        var confirmacion = confirm("Esta por eliminar una imagen. ¿Aún desea hacerlo?");
        
        if(confirmacion == true) {
          var id = $(this).attr("data-rel");
          var tabla = 'portada_slider';
      
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
                $('#mensaje').html('Imagen eliminada.');

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
          var tabla = 'portada_slider';

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