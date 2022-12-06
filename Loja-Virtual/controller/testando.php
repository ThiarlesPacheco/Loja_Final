<h2>Página de teste de Produtos</h2>

<?php

    $produtos = new Produtos();
    $produtos->GetProdutos();

    var_dump($produtos->GetItens());

?>