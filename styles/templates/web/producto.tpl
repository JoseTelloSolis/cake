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

    <div class="container-fluid fondo-area div-producto-detalle">

      <div class="container pt-5">
        <div class="row">
          <div class="col-sm-12">
            <a href="#" class="volver"><i class="fas fa-reply"></i> Volver</a>
          </div>
        </div>
      </div>

      <div class="container div-bienvenidos pt-5">
        <div class="row">

          <div class="col-md-6">
            <img src="img/product-details-1.jpg" class="full-width" alt="">
          </div>

          <div class="col-md-6">
            <div class="producto-detalle">
              <input type="hidden" id="id" value="{$datos.id}">
              <input type="hidden" id="nombre" value="{$datos.nombre}">
              <input type="hidden" id="precio" value="{$datos.precio}">
              <input type="hidden" id="imagen" value="{$datos.imagen}">
              <input type="hidden" id="url" value="{$datos.url}">

              <h4>{$datos.nombre}</h4>
              <p>{$datos.resumen|nl2br}</p>
              <h5>Precio :<span>S/. {$datos.precio}</span></h5>

              {if $datos.stock > 0}
                <div class="quantity_box">
                  <label for="quantity">Cantidad :</label>
                  <input type="number" value="1" id="cantidad">
                </div>
                <a id="add-carrito" class="boton-rosado" href="#">Añadir al Carrito</a>
              {else}
                <p class="agotado">Agotado</p>
              {/if}
              
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-sm-12 mt-5">
            <div class="product_tab_area">
              <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descripción</a>
                  {if $datos.descripcion_opcional NEQ ''}
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Especificaciones</a>
                  {/if}
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <p>{$datos.descripcion|nl2br}</p>
                </div>
                {if $datos.descripcion_opcional NEQ ''}
                  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p>{$datos.descripcion_opcional|nl2br}</p>
                  </div> 
                {/if}               
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="container-fluid fondo-gris padding-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="titulo-principal">
              <h2>Productos relacionados</h2>
            </div>
          </div>
        </div>

        <div class="row">

          {section name=i loop=$otros}
            <!-- producto -->
            <div class="col-6 col-md-4 col-lg-3 mb-4">
              <div class="div-producto">
                <a href="productos/{$otros[i].url}">
                  <div class="div-imagen" style="background-image: url('{$otros[i].imagen}');">
                    <img src="img/producto.png" class="full-width">
                  </div>
                </a>
                <div class="div-texto">
                  <h4>S/.{$otros[i].precio}</h4>
                  <h3>{$otros[i].nombre}</h3>
                  <a class="boton-producto" href="productos/{$otros[i].url}">Añadir al Carrito</a>
                </div>
              </div>
            </div>
            <!-- end producto -->
          {/section}

        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-mensaje" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel"><i class="fa fa-shopping-cart"></i> Carrito de compras</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3>Producto añadido a tu carrito de compras</h3>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Seguir Comprando</button>
            <a href="compra.html" class="boton-rosado"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ir al carrito</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->

    {include 'web/overall/footer.tpl'}

  </body>
</html>