    <div id="barra-rosa" class="container-fluid barra-rosa">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 div-telefono">
            <a href="javascript:void(0)">
              <i class="fas fa-phone fa-flip-horizontal"></i> {$datosConfiguraciones.telefono}
            </a>
            <a href="mailto:{$datosConfiguraciones.email}">
              <i class="far fa-envelope"></i> {$datosConfiguraciones.email}
            </a>
          </div>

          <div class="col-lg-6 div-redes text-right">

            {if $datosConfiguraciones.facebook NEQ ''}
              <a href="{$datosConfiguraciones.facebook}" target="_blank"><i class="fab fa-facebook-f"></i></a>
            {/if}

            {if $datosConfiguraciones.twitter NEQ ''}
              <a href="{$datosConfiguraciones.twitter}" target="_blank"><i class="fab fa-twitter"></i></a>
            {/if}

            {if $datosConfiguraciones.instagram NEQ ''}
              <a href="{$datosConfiguraciones.instagram}" target="_blank"><i class="fab fa-instagram"></i></a>
            {/if}

            <span class="separador"></span>
            <a href="compra.html" id="carrito" class="carrito">
              <i class="fas fa-shopping-cart"></i>
              <span id="cantidad-articulos" class="itemCount empty" title="Productos en carrito">0</span>
            </a>
            <a href="#"><i class="fas fa-search"></i></a>

          </div>

        </div>
      </div>
    </div>

    <div id="menu" class="container-fluid menu-principal">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.html">
          <img src="{$datosConfiguraciones.logo}" alt="">
          <img src="{$datosConfiguraciones.logo_mini}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="my_toggle_menu">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              {if $activo EQ 'index'}
                <li class="active"><a href="index.html">Inicio</a></li>
              {else}
                <li><a href="index.html">Inicio</a></li>
              {/if}

              {if $activo EQ 'nosotros'}
                <li class="active"><a href="nosotros.html">Nosotros</a></li>
              {else}
                <li><a href="nosotros.html">Nosotros</a></li>
              {/if}

              {if $activo EQ 'productos'}
                <li class="active"><a href="productos.html">Productos</a></li>
              {else}
                <li><a href="productos.html">Productos</a></li>
              {/if}
              
              <!--
              <li class="dropdown submenu">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
                <ul class="dropdown-menu">
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="our-team.html">Our Chefs</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                </ul>
              </li>
              -->

            </ul>
            <ul class="navbar-nav justify-content-end">

              {if $activo EQ 'galeria'}
                <li class="active"><a href="galeria.html">Galeria</a></li>
              {else}
                <li><a href="galeria.html">Galeria</a></li>
              {/if}

              {if $activo EQ 'blog'}
                <li class="active"><a href="blog.html">Blog</a></li>
              {else}
                <li><a href="blog.html">Blog</a></li>
              {/if}

              {if $activo EQ 'contacto'}
                <li class="active"><a href="#">Contacto</a></li>
              {else}
                <li><a href="#">Contacto</a></li>
              {/if}              
              
            </ul>
          </div>
        </nav>
      </div>
    </div>