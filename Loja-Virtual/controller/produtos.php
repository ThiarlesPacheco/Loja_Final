<?php

  
    $smarty = new Template();

    //LISTADONDO OS PRODUTOS VINDO DO BANCO
    $produtos = new Produtos();

    if(isset(Rotas::$pag[1]))
    {
        $produtos->GetProdutosCateID(Rotas::$pag[1]);
    }
    else
    {
        $produtos->GetProdutos();
    }


    $smarty->assign('PRO', $produtos->GetItens());
    $smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
    $smarty->assign('PRO_TOTAL', $produtos->TotalDados());
    $smarty->assign('PAGINACAO', $produtos->ShowPaginacao());
    $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
    $smarty->display('produto.tpl');

    // var_dump($produtos->GetItens());

?>