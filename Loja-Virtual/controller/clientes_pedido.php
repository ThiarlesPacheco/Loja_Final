<?php

    $smarty = new Template();

    Login::MenuCliente();
    //LISTADONDO OS PRODUTOS VINDO DO BANCO
    $pedidos = new Pedidos();

    $pedidos->GetPedidosCliente($_SESSION['CLI']['cli_id']);

    $smarty->assign('PEDIDOS', $pedidos->GetItens());
    $smarty->assign('PEDIDOS_QUANTIDADES', $pedidos->TotalDados());
    $smarty->assign('PAG_ITENS', Rotas::ClienteItens());
    $smarty->assign('PAGINACAO', $pedidos->ShowPaginacao());

    $smarty->display('clientes_pedidos.tpl');
?>