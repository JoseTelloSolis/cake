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
              <h3>Pedido</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="compra.html">Pedido</a></li>
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
                  <a href="javascript:void(0);" class="disabled" isdone="0" rel="2">
                    <span class="step_no">2</span>
                    <span class="step_descr">
                      Paso 2<br>
                      <small>Ingrese sus datos</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);" class="disabled" isdone="0" rel="3">
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
            <a href="#" class="volver"><i class="fas fa-reply"></i> Volver</a>
          </div>
        </div>
      </div>

      <div class="container div-bienvenidos pt-5 pb-5">
        <div class="row">

          <div class="col-sm-12 compra">
            <div class="table-responsive">
              <table class="table table-striped jambo_table">
                <thead>
                  <tr class="headings">
                    <th class="column-title"></th>
                    <th class="column-title">Producto</th>
                    <th class="column-title">Precio Unitario</th>
                    <th class="column-title">Cantidad</th>
                    <th class="column-title no-link last">Subtotal</th>
                    <th class="column-title text-center">Eliminar</th>                   
                  </tr>
                </thead>

                <tbody>
                  {foreach item=producto from=$carrito_productos name=carrito}
                    {if ($smarty.foreach.carrito.index + 1) %2 EQ 0}
                      <tr class="odd pointer">
                    {else}
                      <tr class="even pointer">
                    {/if}    
                      
                      <td class="imagen"><img src="{$producto.imagen}" class="img-responsive" alt="{$producto.nombre}"></td>
                      <td>{$producto.nombre}</td>
                      <td>S/. {$producto.precio|number_format:2:'.':','}</td>
                      <td>
                        <div class="input-group detalle-producto-cantidad">
                          <input type="number" class="form-control cantidad" min="1" value="{$producto.cantidad}" data-toggle="tooltip" data-placement="top" title="Clic en editar"> 
                          <button type="button" class="btn edit-cantidad" data-cod="{$producto.codigo|md5}" title="Editar cantidad"><i class="fas fa-pencil-alt"></i></button>
                        </div>
                      </td>
                      <td class="last">S/. {($producto.precio * $producto.cantidad)|number_format:2:'.':','}</td>
                      <td class="text-center">
                        <a href="javascript:void(0)" class="eliminar" title="Quitar producto de esta lista" data-cod="{$producto.codigo|md5}"><i class="fas fa-times"></i></a>
                      </td>                      
                    </tr>
                  {foreachelse}
                    <tr class="odd pointer">
                      <td colspan="6"><h4>Su carrito se encuentra vacio.</h4></td>
                    </tr>
                  {/foreach}
                  </tbody>
              </table>
            </div>

            <div class="total text-right mt-5">
              {if !empty($carrito_productos) AND $carrito_productos|@count NEQ 0} 
              <h3>Total: S/ {$precio_total|number_format:2:'.':','}</h3>
              {/if}
            </div>

            <div class="form-group botones text-right mt-5">
              <a href="productos.html" class="btn btn-secondary">Seguir Comprando</a>
              {if !empty($carrito_productos) AND $carrito_productos|@count NEQ 0} 
              <a href="confirmar.html" class="boton-rosado boton-confirmar">Continuar Pedido <i class="fas fa-sign-out-alt"></i></a>
              {/if}
            </div>
          </div>

        </div>         

      </div>

    </div>

    {include 'web/overall/footer.tpl'}

  </body>
</html>