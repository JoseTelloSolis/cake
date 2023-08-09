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

                                        <!-- boton -->
                                        <div class="div-boton">
                                            <button type="button" class="btn btn-success" id="guardar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Guardar Datos</button>
                                            <span id="mensaje"></span>
                                        </div>
                                        <!-- fin boton --> 
                                        
                                        <!--contenido -->
                                        <div class="panel panel-primary">
                                
                                            <div class="panel-heading">
                                                <div class="panel-title">Cambiar Contraseña</div>
                                            </div>  
                                            
                                            <div class="panel-body">
                                                <form id="formulario" class="form form-horizontal periodico" role="form" enctype="multipart/form-data">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                            
                                                            <!-- texto linea simple -->
                                                            <span class="help-block">
                                                                Contraseña actual
                                                            </span>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                                                <input type="password" class="form-control" id="password_old" name="password_old" placeholder="Ingrese su contraseña actual">
                                                            </div>
                                                            <!-- fin texto linea simple -->

                                                            <!-- texto linea simple -->
                                                            <span class="help-block">
                                                                Nueva contraseña
                                                            </span>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                                                <input type="password" class="form-control" id="password_new" name="password_new" placeholder="Ingrese su nueva contraseña">
                                                            </div>
                                                            <!-- fin texto linea simple -->

                                                            <!-- texto linea simple -->
                                                            <span class="help-block">
                                                                Repetir nueva contraseña
                                                            </span>
                                                            <div class="input-group">
                                                                <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                                                <input type="password" class="form-control" id="password_new_confirm" name="password_new_confirm" placeholder="Repita su nueva contraseña">
                                                            </div>
                                                            <!-- fin texto linea simple -->

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

    <script>    
        {literal}      
        $(document).ready( function() {
               
            $("#guardar").click(function(){
                
                var password_old = $('#password_old').val();
                var password_new = $('#password_new').val();
                var password_new_confirm = $('#password_new_confirm').val();
            
                var parametros = {
                    "password_old" : password_old,
                    "password_new" : password_new,
                    "password_new_confirm" : password_new_confirm
                };

                if(password_old != '' && password_new != '' && password_new_confirm != ''){
                    
                    if(password_new == password_new_confirm){
                        $.ajax({
                            data:  parametros,
                            url:   'panelcambiarpass.html',
                            type:  'post',
                            beforeSend: function() {
                                //procesando
                                $("#mensaje").css("color", "green");
                                $('#mensaje').html('Procesando...');
                            },
                            success: function(datos) {
                                //completo
                                if(parseInt(datos) == 1){
                                    //conectando con exito, redireccionar
                                    $("#mensaje").css("color", "green");
                                    $('#mensaje').html('Contraseña actualizada.');
                                }
                                else{
                                    //los datos son incorrectos
                                    $("#mensaje").css("color", "red");
                                    $('#mensaje').html('Contraseña actual incorrecta');
                                }
                            },
                            error: function(xhr) {
                                //ocurrió un error
                                $("#mensaje").css("color", "red");
                                $('#mensaje').html('Ocurrió un error.');
                            }
                        });
                    }
                    else{
                        $("#mensaje").css("color", "red");
                        $('#mensaje').html('La contraseña nueva y su confirmación no coinciden.');
                    }
                }
                else{
                    $("#mensaje").css("color", "red");
                    $('#mensaje').html('Los datos no pueden estar vacíos.');
                }
                
            });
        });
        {/literal}
    </script>
</html>
