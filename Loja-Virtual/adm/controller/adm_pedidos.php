<?php
    $smarty = new Template();

    $pedidos = new Pedidos();

    if(isset($_POST['ped_apagar']))
    {
        $ped_cod = $_POST['cod_pedido'];
        if($pedidos->Apagar($ped_cod))
        {
            echo '
            <section class="arrivals" id="erro_mostrar">
    
                <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-green-600">
                <h2 class="text-3xl font-medium text-white-600">Pedido Excluido!!</h2>
                </div>
            ';
            echo '</section>';
        }
    }

    if(isset(Rotas::$pag[1]))
    {
        $id = Rotas::$pag[1];
        $pedidos->GetPedidosCliente($id);
    }
    else{
        $pedidos->GetPedidosCliente();
    }

    if(isset($_POST['txt_ref'])) {
        $ref = filter_var($_POST['txt_ref'], FILTER_SANITIZE_STRING);
        $pedidos->GetPedidosREF($ref);
    }
    
    $smarty->assign('PEDIDOS', $pedidos->GetItens());
    $smarty->assign('PAG_ITENS', Rotas::pag_ItensADM());
    $smarty->assign('PAGINACAO', $pedidos->ShowPaginacao());

    if($pedidos->TotalDados() > 0)
    {
        $smarty->display('adm_pedidos.tpl');
    }
    else
    {
        echo '
        <section class="arrivals" id="erro_mostrar">

            <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
            <h2 class="text-3xl font-medium text-white-600">Nenhum Pedido Para Este Cliente</h2>
            </div>
        ';
        Sistema::VoltarPagina();
        echo '</section>';
        exit();
    }

?>