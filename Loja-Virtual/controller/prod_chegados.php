<?php

    $smarty = new Template();
    $produtos = new Produtos();
    $categorias = new Categorias();
    $categorias->GetCategorias();

    if(isset(Rotas::$pag[1]))
    {
        $produtos->GetProdutosCateID(Rotas::$pag[1]);
    }
    else
    {
        $produtos->GetProdutos();
    }

    $smarty->assign('PRO', $produtos->GetItens());
    $smarty->assign('NOVO', Rotas::pag_ProdutosInfo());
    $smarty->assign('CATEGORIAS', $categorias->GetItens());
    $smarty->assign('PAGINAS', $produtos->ShowPaginacao());
    $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
    $smarty->display('chegados.tpl');

?>



