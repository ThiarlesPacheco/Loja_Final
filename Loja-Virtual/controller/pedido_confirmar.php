<?php

if(isset($_SESSION['PRO']))
{
    if(!isset($_POST['frete_radio']))
    {
        Rotas::Redirecionar(2, Rotas::pag_Carrinho().'#dadosfrete');
        exit( '
        <section class="arrivals" id="arrivals">

            <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
            <h2 class="text-3xl font-medium text-white-600">Precisa selecionar o frete!</h2>
            </div>

        </section>
        ');
    }
    
    $smarty = new Template();
    $carrinho = new Carrinho();

    $_SESSION['PED']['frete'] = $_POST['frete_radio'];
    
    $smarty->assign('PRO', $carrinho->GetCarrinho());
    $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
    $smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
    $_SESSION['PED']['total_com_frete'] = ($_POST['frete_radio'] + $carrinho->GetTotal()) ;
    $smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
    $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
    $smarty->assign('PAG_CHEGADOS', Rotas::pag_Chegados());
    $smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
    $smarty->display('pedido_confirmar.tpl');
    // var_dump($carrinho->GetCarrinho());
}
else
{
    echo '
    <section class="arrivals" id="arrivals">

        <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
        <h2 class="text-3xl font-medium text-white-600">Sem produtos no carrinho</h2>
        </div>

    </section>
    ';
    //REDIRECIONAR PARA PÁGINA DE PRODUTOS
    Rotas::Redirecionar(1, Rotas::pag_Chegados());
}


?>