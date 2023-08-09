<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Panel de Administracion</title>

        <!-- Bootstrap -->
        <link href="styles/librerias/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="styles/librerias/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="styles/librerias/nprogress/nprogress.css" rel="stylesheet">
        <!-- Animate.css -->
        <link href="styles/librerias/animate.css/animate.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="styles/build/css/custom.min.css" rel="stylesheet">
        <link href="styles/css/style.css" rel="stylesheet">
    </head>

    <body class="login">
        <div>

            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form id="form-login" novalidate>

                            <h1><img src="styles/images/logo.png" class="img-responsive logo" alt="BJR"></h1>

                            <div class="item input-group">
                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Usuario" name="user" required>
                            </div>

                            <div class="item input-group">
                                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" placeholder="Password" name="pass" required>
                            </div>

                            <div class="input-group div-boton">
                                <span id="mensaje"></span>
                                <button type="submit" id="ingresar" class="btn btn-success">Ingresar <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <p>©2019 Todos los derechos reservados. Diseñado y programado por <a href="https://www.xcrivas.com/" target="_blank">XCrivas Comunicaciones</a></p>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>

            </div>
        </div>

    <!-- jQuery -->
    <script src="styles/librerias/jquery/dist/jquery.min.js"></script>  
    <!-- Bootstrap -->
    <script src="styles/librerias/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- validator -->
    <script src="styles/librerias/validator/validator.js"></script> 

    <script type="text/javascript">
        $(document).ready(function() {

            $('#form-login').submit(function(e){
                e.preventDefault();
                var submit = true;

                if(!validator.checkAll($(this))){
                    submit = false;
                }

                if(submit){
                    var formData = new FormData($('#form-login')[0]);
        
                    $.ajax({
                        url: "admin.html",
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: formData,
                        success: function(datos) {
                            console.log(datos);
                            if(parseInt(datos) == 1){ //cliente
                                //login
                                $('#mensaje').html('Bienvenido...');
                                location.href = 'panelinicio.html';
                            }
                            else{
                                //mensaje incorrecto
                                $('#mensaje').html('Usuario o contraseña incorrectos');
                            }
                        },       
                        error: function(xhr) {
                            //ocurrió un error
                            console.log('Ocurrió un error.');
                        }    
                    });
                }

                return false;
            });

        });
    </script>

    </body>
</html>
