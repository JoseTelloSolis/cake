<!doctype html>
<html lang="es">
  <head>
    {include 'web/overall/head.tpl'}
  </head>
  <body>
    
    {assign "buscar" array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','January','February','March','April','May','June','July','August','September','October','November','December')}
    {assign "reemplazar" array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre')}
    
    {include 'web/overall/header.tpl' activo='productos'}

    <div class="container-fluid no-padding div-banner" style="background-image: url('{$datosProductosTextos.imagen}')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3>{$datosProductosTextos.titulo}</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="productos.html">Productos</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid fondo-area">

      <div class="container div-bienvenidos padding-100">
        <div class="row">

          <div class="col-md-12">
            <div class="titulo-interiores">
              <h2>{$datosProductosTextos.titulo2}</h2>

              <h5 class="texto-productos mb-5">{$datosProductosTextos.texto|nl2br}</h5>
            </div>
          </div>

        </div>

        <div class="row">

          {section name=i loop=$datosProductos}
            <!-- producto -->
            <div class="col-6 col-md-4 col-lg-3 mb-4">
              <div class="div-producto">
                <a href="productos/{$datosProductos[i].url}">
                  <div class="div-imagen" style="background-image: url('{$datosProductos[i].imagen}');">
                    <img src="img/producto.png" class="full-width">
                  </div>
                </a>
                <div class="div-texto">
                  <h4>S/.{$datosProductos[i].precio}</h4>
                  <h3>{$datosProductos[i].nombre}</h3>
                  <a class="boton-producto" href="productos/{$datosProductos[i].url}">Añadir al Carrito</a>
                </div>
              </div>
            </div>
            <!-- end producto -->
          {/section}

        </div>

        <div class="row">
          <div class="col-sm-12">
            <nav aria-label="Page navigation example">
              {$paginador}
            </nav>
          </div>
        </div>

      </div>

    </div>

    <div class="container-fluid paralax mb-5" style="background-image: url('{$datosPortada.fondo_seccion3}');">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="media">
              <div class="d-flex">
                <img src="{$datosPortada.imagen_seccion3}" alt="">
              </div>
              <div class="media-body">
                <h4>{$datosPortada.titulo_seccion3}</h4>
                <p>{$datosPortada.texto_seccion3|nl2br}</p>

                {if $datosPortada.boton_seccion3 NEQ ''}
                  <a class="boton2" href="{$datosPortada.enlace_seccion3}">{$datosPortada.boton_seccion3}</a>
                {/if}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {include 'web/overall/footer.tpl'}

  </body>
</html>