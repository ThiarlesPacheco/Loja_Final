<?php

// echo $_SESSION['pedido'];

if(isset($_SESSION['PRO']))
{
    
    $smarty = new Template();
    $carrinho = new Carrinho();

    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
    $smarty->assign('PAG_CHEGADOS', Rotas::pag_Chegados());
    $smarty->assign('PAG_CONFIRMAR', Rotas::pag_PedidoConfirmar());
    $smarty->assign('PESO', number_format( $carrinho->GetPeso(),3,'.',''));
    $smarty->display('carrinho.tpl');
    // var_dump($carrinho->GetCarrinho());
}
else
{
    echo '
    <section class="arrivals" id="arrivals">

        <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
        <h2 class="text-3xl font-medium text-white-600">Não possui produtos no carrinho!</h2>
        </div>

    </section>
    ';
    //REDIRECIONAR PARA PÁGINA DE PRODUTOS
    Rotas::Redirecionar(1, Rotas::pag_Chegados());
}


?>