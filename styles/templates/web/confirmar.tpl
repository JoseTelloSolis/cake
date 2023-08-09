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
              <h3>Confirmar Pedido</h3>
              <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="confirmar.html">Pedido</a></li>
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

      <div class="container div-bienvenidos div-confirmar pt-5 pb-5">

        <form id="formulario">

          <div class="row">
            <div class="col-sm-12">
              <div class="titulo-principal">
                <h2>Detalle del Pedido</h2>
              </div>
            </div>  
          </div>

          <div class="row">
            <div class="col-md-6">

              <input type="hidden" id="total" name="total" value="{$precio_total}">
              <input type="hidden" id="id_usuario" name="id_usuario" value="0">
              <input type="hidden" id="tipo" name="tipo" value="confirmar">

              <div class="form-group">
                <label for="nombre">Nombre <span>*</span></label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
              </div>

              <div class="form-group">
                <label for="telefono">Email <span>*</span></label>
                <input type="text" class="form-control" id="email" name="email" required>
              </div>

              <div class="form-group">
                <label for="telefono">Departamento <span>*</span></label>
                <select class="form-control" id="departamento" name="departamento" required>
                  <option value="" selected disabled>Elegir...</option>

                  {section name=i loop=$departamentos}
                    <option data-id="{$departamentos[i].id}" value="{$departamentos[i].name}">{$departamentos[i].name}</option>
                  {/section}
                </select>
              </div>

              <div class="form-group">
                <label for="telefono">Distrito <span>*</span></label>
                <select class="form-control" id="distrito" name="distrito" required>
                  <option value="" selected disabled>Elegir...</option>
                  <option value="Opcion1">Opcion1</option>
                  <option value="Opcion2">Opcion2</option>
                </select>
              </div>

            </div>

            <div class="col-md-6">
              
              <div class="form-group">
                <label for="apellidos">Apellidos <span>*</span></label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
              </div>

              <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
              </div>

              <div class="form-group">
                <label for="telefono">Provincia <span>*</span></label>
                <select class="form-control" id="provincia" name="provincia" required>
                  <option value="" selected disabled>Elegir...</option>
                  <option value="Opcion1">Opcion1</option>
                  <option value="Opcion2">Opcion2</option>
                </select>
              </div>

              <div class="form-group">
                <label for="telefono">Direccion <span>*</span></label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
              </div>

            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label for="telefono">Observaciones</label>
                <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
              </div>
            </div>

          </div>
        
        

          <div class="row">

            <div class="row">
              <div class="col-sm-12">
                <div class="titulo-principal">
                  <h2>Su Pedido</h2>
                </div>
              </div>  
            </div>

            <div class="col-sm-12 compra">
              <div class="table-responsive">
                <table class="table table-striped jambo_table">
                  <thead>
                    <tr class="headings">
                      <th class="column-title">Producto</th>
                      <th class="column-title">Precio Unitario</th>
                      <th class="column-title">Cantidad</th>
                      <th class="column-title no-link last">Subtotal</th>                 
                    </tr>
                  </thead>

                  <tbody>
                    {foreach item=producto from=$carrito_productos name=carrito}
                      {if ($smarty.foreach.carrito.index + 1) %2 EQ 0}
                        <tr class="odd pointer">
                      {else}
                        <tr class="even pointer">
                      {/if}  

                        <td>{$producto.nombre}</td>
                        <td>S/. {$producto.precio|number_format:2:'.':','}</td>
                        <td>{$producto.cantidad}</td>
                        <td class="last">S/. {($producto.precio * $producto.cantidad)|number_format:2:'.':','}</td>                                    
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
                <button type="submit" class="boton-rosado boton-confirmar">Finalizar Pedido <i class="fas fa-sign-out-alt"></i></button>
                {/if}
              </div>
            </div>

          </div>  

        </form>       

      </div>

    </div>

    {include 'web/overall/footer.tpl'}

  </body>
</html>