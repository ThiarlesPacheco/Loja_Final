<!-- Inicio Section Nossos Produtos -->

<section class="products" id="products">

    <h1 class="heading"> Nosso <span>Produtos</span> </h1>

    {if $PRO_TOTAL < 1}
        <h4 class="alert alert-danger">Nenhum produto encontrado</h4>
    {/if}

    <div class="swiper products-slider" data-aos="zoom-in">

       {*COMEÇAR A LISTA DO PRODUTO*}
      
        <div class="swiper-wrapper">

            {foreach from=$PRO item=P}
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="{$PAG_CARRINHO}" class="fas fa-shopping-cart"></a>
                        <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="{$P.pro_img}">
                    </div>
                    <div class="content">
                        <h3>{$P.pro_nome}</h3>
                        <div class="price">R${$P.pro_valor} <span>$595.99</span> </div>
                    </div>
                </div>
           {/foreach}

        </div>

    </div>

    <div class="box-container">
        {$PAGINACAO}
    </div>

</section>

<!-- Fim Section Nossos Produtos -->