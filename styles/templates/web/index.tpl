<!DOCTYPE html>
<html lang="es">
  <head>
    {include 'web/overall/head.tpl'}
  </head>
  <body>

    {assign "buscar" array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','January','February','March','April','May','June','July','August','September','October','November','December')}
    {assign "reemplazar" array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre')}
    
    {include 'web/overall/header.tpl' activo='index'}

    <div class="container-fluid no-padding">
      <div id="carousel-index" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">

          {section name=i loop=$datosPortadaSlider}

          {if $smarty.section.i.first}
            <div class="carousel-item slide1 active" style="background-image: url('{$datosPortadaSlider[i].imagen}')" data-interval="8000">
          {else}
            <div class="carousel-item slide1" style="background-image: url('{$datosPortadaSlider[i].imagen}')" data-interval="8000">
          {/if}

            <img src="img/slider.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
              <div class="caption-top">
                <div class="box">
                  <h3>{$datosPortadaSlider[i].titulo|nl2br}</h3>
                </div>                
              </div>
              <div class="caption-bottom">
                <div class="box">
                  <p>{$datosPortadaSlider[i].texto|nl2br}</p>

                  {if $datosPortadaSlider[i].boton NEQ ''}
                    <a class="boton" href="{$datosPortadaSlider[i].enlace}">{$datosPortadaSlider[i].boton}</a>
                  {/if}
                </div> 
              </div>              
            </div>
          </div>
          {/section}
         
        </div>
        <a class="carousel-control-prev" href="#carousel-index" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-index" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="container-fluid fondo-area">

      <div class="container div-bienvenidos padding-100">
        <div class="row">

          <div class="col-md-6">
            <div class="titulo-principal">
              <h2>{$datosPortada.titulo_seccion1}</h2>

              <p>{$datosPortada.texto1_seccion1|nl2br}</p>
            </div>         

            <p class="texto-gris">{$datosPortada.texto2_seccion1|nl2br}</p>

            {if $datosPortada.boton_seccion1 NEQ ''}
              <a class="boton-rosado" href="{$datosPortada.enlace_seccion1}">{$datosPortada.boton_seccion1}</a>
            {/if}
          </div>

          <div class="col-md-6">
            <img class="full-width" src="{$datosPortada.imagen_seccion1}" alt="">
          </div>

        </div>
      </div>

      <div class="container div-productos">
        <div class="row">
          <div class="col-sm-12">
            <div class="titulo-principal">
              <h2>{$datosPortada.titulo_seccion2}</h2>

              <h5>{$datosPortada.texto_seccion2|nl2br}</h5>
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
      </div>

    </div>

    <div class="container-fluid paralax" style="background-image: url('{$datosPortada.fondo_seccion3}');">
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

    <div class="container-fluid div-servicios">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>{$datosPortada.titulo_seccion4}</h2>
          </div>
        </div>

        <div class="row">

          <!-- servicio -->
          <div class="col-md-4">
            <div class="div-servicio">
              <img src="{$datosPortada.imagen1_seccion4}" class="img-servicio">
              <h4>{$datosPortada.titulo1_seccion4}</h4>
              <p>{$datosPortada.texto1_seccion4|nl2br}</p>
            </div>
          </div>
          <!-- end servicio -->

          <!-- servicio -->
          <div class="col-md-4">
            <div class="div-servicio">
              <img src="{$datosPortada.imagen2_seccion4}" class="img-servicio">
              <h4>{$datosPortada.titulo2_seccion4}</h4>
              <p>{$datosPortada.texto2_seccion4|nl2br}</p>
            </div>
          </div>
          <!-- end servicio -->

          <!-- servicio -->
          <div class="col-md-4">
            <div class="div-servicio">
              <img src="{$datosPortada.imagen3_seccion4}" class="img-servicio">
              <h4>{$datosPortada.titulo3_seccion4}</h4>
              <p>{$datosPortada.texto3_seccion4|nl2br}</p>
            </div>
          </div>
          <!-- end servicio -->

        </div>
      </div>
    </div>

    <div class="container div-empleados padding-100">
      <div class="row">

        <div class="col-6 col-sm-6 col-md-3">
          <div class="titulo-principal">
            <h2>{$datosPortada.titulo_seccion5}</h2>
            <p>{$datosPortada.texto_seccion5|nl2br}</p>
          </div>
        </div>

        {section name=i loop=$datosEmpleados}
          <div class="col-6 col-sm-6 col-md-3">
            <div class="div-empleado">
              <div class="empleado-imagen">
                <img class="img-fluid" src="{$datosEmpleados[i].imagen}" alt="">
                <ul class="empleado-lista">

                  {if $datosEmpleados[i].facebook NEQ ''}
                    <li><a href="{$datosEmpleados[i].facebook}" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                  {/if}

                  {if $datosEmpleados[i].twitter NEQ ''}
                    <li><a href="{$datosEmpleados[i].twitter}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                  {/if}

                  {if $datosEmpleados[i].linkedin NEQ ''}
                    <li><a href="{$datosEmpleados[i].linkedin}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                  {/if}                  

                  {if $datosEmpleados[i].instagram NEQ ''}
                    <li><a href="{$datosEmpleados[i].instagram}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                  {/if}
                  
                </ul>
              </div>
              <h4>{$datosEmpleados[i].nombre}</h4>
              <h5>{$datosEmpleados[i].descripcion}</h5>
            </div>
          </div>
        {/section}

      </div>
    </div>

    <div class="container-fluid div-clientes padding-100">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12">
            <div class="titulo-clientes">
              <h2>{$datosPortada.titulo_seccion6}</h2>

              <div class="slider-clientes-botones">
                <a href="#" class="slider-clientes-prev mr-2">
                  <i class="fas fa-angle-left"></i>
                </a>
                <a href="#" class="slider-clientes-next">
                  <i class="fas fa-angle-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div id="carousel-clientes" class="carousel slide" data-ride="carousel" data-interval="false">
              <div class="carousel-inner">


                {section name=i loop=$datosTestimonios}

                  <!-- cliente -->

                  {if $smarty.section.i.first}
                    <div class="carousel-item active">
                  {else}
                    <div class="carousel-item">
                  {/if}

                    <div class="item">
                      <div class="media">
                        <div class="d-flex">
                          {if $datosTestimonios[i].imagen NEQ ''}
                            <img src="{$datosTestimonios[i].imagen}" alt="" class="testimonio-imagen">
                          {else}
                            <img src="img/testimonios/testimonio.png" alt="" class="testimonio-imagen">
                          {/if}
                          <h3>“</h3>
                        </div>
                        <div class="media-body">
                          <p>{$datosTestimonios[i].texto|nl2br}</p>
                          <h5>- {$datosTestimonios[i].nombre}</h5>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- end cliente -->
                {/section}

              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container div-blog padding-100">
      <div class="row">
        <div class="col-sm-12">
          <div class="titulo-principal">
            <h2>{$datosPortada.titulo_seccion7}</h2>
            <h5>{$datosPortada.texto_seccion7|nl2br}</h5>
          </div>
        </div>
      </div>

      <div class="row">


        {section name=i loop=$datosBlog}
          <!-- blog -->
          <div class="col-md-4">
            <div class="blog-item">
              <div class="blog-imagen" style="background-image: url('{$datosBlog[i].imagen}')">
                <img class="full-width" src="img/blogimagen.png" alt="">
              </div>
              <div class="blog-texto">
                <a href="blog/{$datosBlog[i].url}"><h5>{$datosBlog[i].fecha|date_format:"%e %B %Y"|replace:$buscar:$reemplazar}</h5></a>
                <a href="blog/{$datosBlog[i].url}"><h4>{$datosBlog[i].titulo}</h4></a>
                <p>{$datosBlog[i].resumen}</p>
              </div>
            </div>
          </div>
          <!-- end blog -->
        {/section}

      </div>
    </div>

    {include 'web/overall/footer.tpl'}

  </body>
</html>