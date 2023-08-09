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

    <div class="container-fluid fondo-area">

      <div class="container div-bienvenidos padding-100">
        
        <div class="row">

          {section name=i loop=$datosBlog}
            <!-- blog -->
            <div class="col-12 col-md-6 col-lg-6 mb-4">
              <div class="div-producto div-blog">
                <a href="blog/{$datosBlog[i].url}">
                  <div class="div-imagen" style="background-image: url('{$datosBlog[i].imagen}');">
                    <img src="img/blogimagen.png" class="full-width">
                  </div>
                </a>
                <div class="div-fecha">
                  <span class="fecha">{$datosBlog[i].fecha|date_format:"%e %B %Y"|replace:$buscar:$reemplazar}</span>

                  {if $datosBlog[i].autor NEQ ''}
                    <span class="autor">Autor: {$datosBlog[i].autor}</span>
                  {/if}
                </div>
                <div class="div-texto text-left">
                  <a href="blog/{$datosBlog[i].url}"><h3>{$datosBlog[i].titulo}</h3></a>

                  <p>{$datosBlog[i].resumen}</p>

                  <a class="boton-producto" href="blog/{$datosBlog[i].url}">Leer más</a>
                </div>
              </div>
            </div>
            <!-- end blog -->
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

    {include 'web/overall/footer.tpl'}

  </body>
</html>