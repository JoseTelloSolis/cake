<!DOCTYPE html>
<html lang="es">
  <head>
    {include 'web/overall/head.tpl'}
  </head>
  <body>

    {assign "buscar" array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','January','February','March','April','May','June','July','August','September','October','November','December')}
    {assign "reemplazar" array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre')}
    
    {include 'web/overall/header.tpl' activo='nosotros'}

    <div class="container-fluid no-padding div-banner" style="background-image: url('img/banner-bg.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="banner-texto">
              <h3>Nosotros</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="nosotros.html">Nosotros</a></li>
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
              <h2>Sobre Nosotros</h2>

              <h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</h6>

              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem.</p>
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <img src="img/bakery-1.jpg"  class="full-width"  alt="">
          </div>

          <div class="col-md-4 mb-3">
            <img src="img/bakery-2.jpg"  class="full-width"  alt="">
          </div>

          <div class="col-md-4 mb-3">
            <img src="img/bakery-3.jpg"  class="full-width"  alt="">
          </div>
        </div>
      </div>

    </div>

    <div class="container-fluid paralax" style="background-image: url('img/video-1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="media">              
              <div class="media-body media-body-interior text-center">
                <h4>Real Taste</h4>
                <p>A light, sour wheat dough with roasted walnuts and freshly picked rosemary, thyme, poppy seeds, parsley and sage</p>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid padding-100 div-mision">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2>Misión</h2>
          </div>

          <div class="col-lg-9">
            <div class="mision-texto">
              <h6>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudan-tium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</h6>

              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatu</p>
            </div>
          </div>
        </div>
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

    {include 'web/overall/footer.tpl'}

  </body>
</html>