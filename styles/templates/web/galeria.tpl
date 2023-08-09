<!doctype html>
<html lang="es">
  <head>
    {include 'web/overall/head.tpl'}
  </head>
  <body>
    
    {assign "buscar" array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','January','February','March','April','May','June','July','August','September','October','November','December')}
    {assign "reemplazar" array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre')}
    
    {include 'web/overall/header.tpl' activo='galeria'}

    <div class="container-fluid no-padding div-banner" style="background-image: url('{$datosProductosTextos.imagen}')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3>Galeria</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="galeria.html">Galeria</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid fondo-area">

      <div class="container div-productos">

        <div class="row">

          {section name=i loop=$datosGaleria}
            <!-- producto -->
            <div class="col-6 col-md-4 col-lg-4 mb-4">
              <div class="div-producto div-galeria">
                <a href="{$datosGaleria[i].imagen}" data-fancybox="gallery" data-caption="{$datosGaleria[i].titulo}">
                  <div class="div-imagen" style="background-image: url('{$datosGaleria[i].imagen}');">
                    <img src="img/galeria.png" class="full-width">
                  </div>
                </a>
                <div class="div-texto">
                  <a href="{$datosGaleria[i].imagen}" data-fancybox="gallery" data-caption="{$datosGaleria[i].titulo}">
                    <h3>{$datosGaleria[i].titulo}</h3>
                  </a>
                </div>
              </div>
            </div>
            <!-- end producto -->
          {/section}

        </div>
      </div>

    </div>

    {include 'web/overall/footer.tpl'}

  </body>
</html>