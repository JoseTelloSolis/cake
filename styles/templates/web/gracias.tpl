<!doctype html>
<html lang="es">
  <head>
    {include 'web/overall/head.tpl'}
  </head>
  <body>
    
    {assign "buscar" array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','January','February','March','April','May','June','July','August','September','October','November','December')}
    {assign "reemplazar" array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre')}
    
    {include 'web/overall/header.tpl' activo=''}

    <div class="container-fluid no-padding div-banner" style="background-image: url('{$datosProductosTextos.imagen}')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3>Gracias</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="productos.html">Productos</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid fondo-area div-producto-detalle">

      <div class="container pt-5">
        <div class="row">
          <div class="col-sm-12">
            <div id="wizard" class="form_wizard wizard_horizontal">
              <ul class="wizard_steps anchor">
                <li>
                  <a href="javascript:void(0);" class="selected" isdone="1" rel="1">
                    <span class="step_no">1</span>
                    <span class="step_descr">
                      Paso 1<br>
                      <small>Orden de compra</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);" class="selected" isdone="1" rel="2">
                    <span class="step_no">2</span>
                    <span class="step_descr">
                      Paso 2<br>
                      <small>Ingrese sus datos</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);" class="selected" isdone="1" rel="3">
                    <span class="step_no">3</span>
                    <span class="step_descr">
                      Paso 3<br>
                      <small>Generar pedido</small>
                    </span>
                  </a>
                </li>
              </ul>
            </div>  
          </div>
        </div>
      </div>

      <div class="container pt-5">
        <div class="row">
          <div class="col-sm-12">
            <a href="productos.html" class="volver"><i class="fas fa-reply"></i> Volver</a>
          </div>
        </div>
      </div>

      <div class="container div-bienvenidos pt-5 pb-5">
        <div class="row">

          <div class="col-sm-12 compra">
            
            <div class="row">
              <div class="col-sm-12">
                <div class="titulo-principal">
                  <h2>Pedido generado</h2>

                  <p>En breve nos pondremos en contacto con usted...</p>
                </div>
              </div>  
            </div>

            <div class="form-group botones text-right mt-5">
              <a href="index.html" class="btn btn-secondary">Volver al Inicio</a>
            </div>
          </div>

        </div>         

      </div>

    </div>

    {include 'web/overall/footer.tpl'}

  </body>
</html>