<!doctype html>
<html lang="es">
  <head>
    {include 'web/overall/head.tpl'}
  </head>
  <body>
    
    {assign "buscar" array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','January','February','March','April','May','June','July','August','September','October','November','December')}
    {assign "reemplazar" array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre')}
    
    {include 'web/overall/header.tpl' activo='blog'}

    <div class="container-fluid no-padding div-banner" style="background-image: url('{$datosBlogTextos.imagen}')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3>{$datosBlogTextos.titulo}</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="blog.html">Blog</a></li>
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
            <a href="#" class="volver"><i class="fas fa-reply"></i> Volver</a>
          </div>
        </div>
      </div>

      <div class="container div-bienvenidos div-blog pt-5">
        <div class="row">

          <div class="col-lg-9">
            <img src="{$datos.imagen}" class="full-width" alt="">

            <div class="div-fecha">
              <span class="fecha">{$datos.fecha|date_format:"%e %B %Y"|replace:$buscar:$reemplazar}</span>

              {if $datos.autor NEQ ''}
                <span class="autor">Autor: {$datos.autor}</span>
              {/if}
            </div>

            <div class="div-texto text-left">
              <a href="blog/{$datosBlog[i].url}"><h3>{$datos.titulo}</h3></a>

              {$datos.texto}
            </div>

          </div>

          <div class="col-lg-3 sidebar">
            <h3>Lo último</h3>

            <div class="recientes">

              {section name=i loop=$ultimos}
                <div class="media">
                  <div class="imagen" style="background-image: url('{$ultimos[i].imagen}');">
                    <a href="blog/{$ultimos[i].url}">
                      <img src="img/sidebar.png" alt="{$ultimos[i].titulo}">
                    </a>
                  </div>
                  <div class="media-body">
                    <a href="blog/{$ultimos[i].url}"><h4>{$ultimos[i].titulo}</h4></a>
                    <p class="fecha">{$ultimos[i].fecha|date_format:"%e %B %Y"|replace:$buscar:$reemplazar}</p>
                  </div>
                </div>
              {/section}
                  
            </div>

          </div>

        </div>

      </div>

    </div>


    {include 'web/overall/footer.tpl'}

  </body>
</html>