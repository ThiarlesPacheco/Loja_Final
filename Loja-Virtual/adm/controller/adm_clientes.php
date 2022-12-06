<?php
    $smarty = new Template();

    $clientes = new Cliente();
    $clientes->GetClientes();

    $smarty->assign('CLIENTES', $clientes->GetItens());
    $smarty->assign('PAG_EDITAR', Rotas::pag_ClientesEditarADM());
    $smarty->assign('PAG_PEDIDOS', Rotas::pag_PedidosADM());
    // $smarty->assign('PAGINACAO', $produtos->ShowPaginacao());
    $smarty->display('adm_clientes.tpl');
?>