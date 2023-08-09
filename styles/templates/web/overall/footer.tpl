    <div class="container-fluid footer">
      <div class="container">
        <div class="row">

          <div class="col-6 col-lg-3 mb-4">
            <img src="{$datosConfiguraciones.logo_mini}" class="full-width" alt="">

            <p>{$datosConfiguraciones.texto}</p>

            <ul class="nav">

              {if $datosConfiguraciones.facebook NEQ ''}
                <li><a href="{$datosConfiguraciones.facebook}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              {/if}

              {if $datosConfiguraciones.twitter NEQ ''}
                <li><a href="{$datosConfiguraciones.twitter}" target="_blank"><i class="fab fa-twitter"></i></a></li>
              {/if}

              {if $datosConfiguraciones.instagram NEQ ''}
                <li><a href="{$datosConfiguraciones.instagram}" target="_blank"><i class="fab fa-instagram"></i></a></li>
              {/if}

            </ul>
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="titulo-footer">
              <h3>Enlaces</h3>
            </div>
            <ul class="lista-footer">
              <li><a href="inicio.html">Inicio</a></li>
              <li><a href="nosotros.html">Nosotros</a></li>
              <li><a href="productos.html">Productos</a></li>
              <li><a href="galeria.html">Galeria</a></li>
            </ul>                    
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="titulo-footer">
              <h3>Horario</h3>
            </div>
            <div class="lista-footer">
              {$datosConfiguraciones.horario}
            </div>                   
          </div>

          <div class="col-6 col-lg-3 mb-4">
            <div class="titulo-footer">
              <h3>Contacto</h3>
            </div>
            <h4>{$datosConfiguraciones.telefono}</h4>
            <p>{$datosConfiguraciones.direccion|nl2br}</p>
            <h5>{$datosConfiguraciones.email}</h5>                  
          </div>

        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

    <script type="text/javascript">
 
      function navbarFixed(){
        let nav_offset_top = $('#menu').height() + $('#barra-rosa').height(); 
        var scroll = $(window).scrollTop(); 

        if (scroll >= nav_offset_top ) {
          $('#menu').addClass('menu-fixed');
        }  
        else {
          $('#menu').removeClass('menu-fixed');
        }
      }

      function getCantidad(){
        var tipo = 'cantidad_articulos';

        var parametros = {
          'cantidad_articulos' : tipo
        };

        $.ajax({
          data:  parametros,
          url:   'carrito.html',
          type:  'post',
          cache: false,
          success: function(datos) {
            //console.log(datos);
            if(parseInt(datos) > 0){       
              $('#cantidad-articulos').html(datos);
              $('#cantidad-articulos').removeClass('empty');
            }
          },
          error: function(xhr) {
            console.log('Ocurrio un error.');
          }
        });
      }

      $(document).ready(function(){

        getCantidad();

        navbarFixed();

        $(window).scroll(function() {
          navbarFixed();
        });

        $('.volver').click(function(e){
          e.preventDefault();
          window.history.back();
        });

        $('.cantidad').tooltip('enable');

        $('.slider-clientes-prev').click(function(e){
          e.preventDefault();
          $('#carousel-clientes').carousel('prev');
        });

        $('.slider-clientes-next').click(function(e){
          e.preventDefault();
          $('#carousel-clientes').carousel('next');
        });

        $('#add-carrito').click(function(e){

          e.preventDefault();
        
          let id = $('#id').val();
          let nombre = $('#nombre').val();
          let precio = $('#precio').val();
          let imagen = $('#imagen').val();
          let url = $('#url').val();
          let cantidad = $('#cantidad').val();
          let add = 'addcarrito';

          let parametros = {
            "id" : id,
            "nombre" : nombre,
            "precio" : precio,
            "imagen" : imagen,
            "url" : url,
            "cantidad" : cantidad,
            "add" : add
          }; 

          $.ajax({
            data:  parametros,
            url:   'carrito.html',
            type:  'post',
            cache: false,
            success: function(datos) {
              console.log(datos);
              if(datos == 1){
                $('#modal-mensaje').modal('show');
              }
            },
            complete: function(datos) {
              getCantidad();
            },
            error: function(xhr) {
              console.log('Ocurrio un error.');
            }
          });

        });

        $('.edit-cantidad').click(function(){

          var cantidad = $(this).parent().find('.cantidad').val();
          var codigo = $(this).attr('data-cod');
          var tipo = 'edit_cantidad';

          var parametros = {
            "cantidad" : cantidad,
            "codigo" : codigo,
            "tipo" : tipo
          };

          $.ajax({
            data:  parametros,
            url:   'compra.html',
            type:  'post',
            cache: false,
            success: function(datos) {
              if(datos == 1){
                location.reload();
              }
            },
            error: function(xhr) {
              console.log('Ocurrió un error.');
            }
          });

        });

        $('.eliminar').click(function(){

          var codigo = $(this).attr('data-cod');
          var tipo = 'eliminar';

          var parametros = {
            "codigo" : codigo,
            "tipo" : tipo
          };

          $.ajax({
            data:  parametros,
            url:   'compra.html',
            type:  'post',
            cache: false,
            success: function(datos) {
              if(datos == 1){
                location.reload();
              }
            },
            error: function(xhr) {
              console.log('Ocurrió un error.');
            }
          });  
        });

        $('#departamento').change(function(){
          let id = $(this).children(':selected').attr('data-id');

          let parametros = {
            'id' : id,
            'tipo': 'getProvincias'
          };

          $.ajax({
            data:  parametros,
            url:   'confirmar.html',
            type:  'post',
            beforeSend: function() {
              //$('.loader-facturacion').show();
            },
            success:  function(datos) {

              let arrProvincias = JSON.parse(datos);

              $('#provincia').html('<option value="" disabled selected>Elegir...</option>');

              let provincias = '<option value="" disabled selected>Elegir...</option>';

              for(let item of arrProvincias) {
                provincias += '<option value="'+item.name+'" data-id="'+item.id+'">'+item.name+'</option>';
              }

              $('#provincia').html(provincias);
              $('#distrito').html('<option value="" disabled selected>Elegir...</option>');

              //$('.loader-facturacion').hide();
            }
          });
        });

        $('#provincia').change(function(){
          let id = $(this).children(':selected').attr('data-id');

          let parametros = {
            'id' : id,
            'tipo': 'getDistritos'
          };

          $.ajax({
            data:  parametros,
            url:   'confirmar.html',
            type:  'post',
            beforeSend: function() {
              //$('.loader-facturacion').show();
            },
            success:  function(datos) {

              let arrDistritos = JSON.parse(datos);

              $('#distrito').html('<option value="" disabled selected>Elegir...</option>');

              let distritos = '<option value="" disabled selected>Elegir...</option>';

              for(let item of arrDistritos) {
                distritos += '<option value="'+item.name+'" data-id="'+item.id+'">'+item.name+'</option>';
              }

              $('#distrito').html(distritos);

              //$('.loader-facturacion').hide();
            }
          });
        });

        $('#formulario').submit(function(e){

          e.preventDefault();

          var formData = new FormData($('#formulario')[0]);

          $.ajax({
            url: "confirmar.html",
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function(datos) {
              console.log(datos);
              if(datos == 1){
                window.location.href = 'gracias.html';
              }
            },
            error: function(xhr) {
              console.log('Ocurrió un error.');
            }
          });

        });

      });
    </script>