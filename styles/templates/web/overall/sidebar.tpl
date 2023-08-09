        <div class="col-md-4 sidebar">

          <div class="celeste">
            <h2><span>Los más visto</span></h2>

            <div class="celeste-inner">
              <div class="row">

                {section name=i loop=$masVistos}
                  <div class="col-md-12 noticia noticia-sidebar">
                    <div class="imagen" style="background-image: url('{$masVistos[i].imagen}')">
                      <a href="noticias/{$masVistos[i].url}"><img src="img/noticia_768x432.png" class="img-fluid"></a>
                    </div> 
                    <div class="texto">
                      <a href="categorias/{$masVistos[i].categoria_url}" class="tag" style="background-color:#{$masVistos[i].categoria_color}">{$masVistos[i].categoria}</a>
                      <a href="noticias/{$masVistos[i].url}" class="titulo">{$masVistos[i].titulo}</a>
                      <span class="fecha-autor">
                        {$masVistos[i].fecha|date_format:"%e %B %Y"|replace:$buscar:$reemplazar}
                        | Autor: DataPlayers
                      </span>
                    </div>
                  </div>
                {/section}
                
              </div>
            </div>

          </div>

          <div class="banner mt-5">
            <img src="http://ximg.es/300x250/9b9b9b/fff" class="full-width">
          </div>

          <div class="banner mt-5">
            <img src="http://ximg.es/300x600/9b9b9b/fff" class="full-width">
          </div>

        </div>