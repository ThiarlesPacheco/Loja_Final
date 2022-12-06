<section class="arrivals" id="arrivals">

    <h1 class="heading"> Recém <span>Chegados</span> </h1>
    {* <div class="heading">
        {foreach from=$CATEGORIAS item=C}
            <li>
                <a class="nav-link" href="{$C.cat_link}">{$C.cat_nome}</a>
            </li>
        {/foreach}
        <li>
            <a class="nav-link" href="{$PAG_PRODUTO}">Todos</a>
        </li>
    </div> *}

    <div class="box-container">

        {foreach from=$PRO item=PC}

        <div class="box" data-aos="fade-right">
            <div class="icons">
                <a href="{$PAG_CARRINHO}" class="fas fa-shopping-cart"></a>
                <a href="{$NOVO}/{$PC.pro_id}/{$PC.pro_slug}" class="fas fa-eye"></a>
                <a href="#" class="fas fa-share"></a>
            </div>
            <div class="image">
                <img src="{$PC.pro_img}">
            </div>
            <div class="content">
                <h3>{$PC.pro_nome}</h3>
                <div class="price">R$ {$PC.pro_valor} <span>$495.99</span> </div>
            </div>
        </div>

        {/foreach}

    </div>
        <div class="box-container">
            {$PAGINAS}
        </div>
</section>

<!-- Fim Section Recem Chegados -->