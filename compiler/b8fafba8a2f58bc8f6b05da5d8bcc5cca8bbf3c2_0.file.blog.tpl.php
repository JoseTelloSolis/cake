<?php /* Smarty version 3.1.27, created on 2021-08-17 22:00:16
         compiled from "C:\xampp\htdocs\cake\styles\templates\panel\blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1234214914611c15500db739_53080870%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8fafba8a2f58bc8f6b05da5d8bcc5cca8bbf3c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cake\\styles\\templates\\panel\\blog.tpl',
      1 => 1627897419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1234214914611c15500db739_53080870',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_611c1550138de6_76679744',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_611c1550138de6_76679744')) {
function content_611c1550138de6_76679744 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1234214914611c15500db739_53080870';
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
    
  <?php echo '</script'; ?>
>
</html>
<?php }
}
?>