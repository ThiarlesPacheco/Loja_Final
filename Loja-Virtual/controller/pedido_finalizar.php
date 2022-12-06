<?php

// Se não tiver logado, Não pode finalizar o pedido
if(!Login::Logado())
{
    Login::AcessoNegado();
    Rotas::Redirecionar(2, Rotas::pag_ClienteLogin());
}
// Caso esteja Logado
else
{
    if(isset($_SESSION['PRO']))
    {
        if(!isset($_SESSION['PED']['frete']))
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

        $ref_cod_pedido = date('ymdHms') . $_SESSION['CLI']['cli_id'];

        if(!isset($_SESSION['PED']['pedido']))
        {
            $_SESSION['PED']['pedido'] = $ref_cod_pedido;
        }

        if(!isset($_SESSION['PED']['ref']))
        {
            $_SESSION['PED']['ref'] = $ref_cod_pedido;
        }

        $smarty->assign('PRO', $carrinho->GetCarrinho());
        $smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
        $smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pag_CarrinhoAlterar());
        $smarty->assign('PAG_CHEGADOS', Rotas::pag_Chegados());
        $smarty->assign('PAG_FINALIZAR', Rotas::pag_PedidoFinalizar());
        $smarty->assign('TEMA', Rotas::get_SiteTEMA());
        $smarty->assign('FRETE', Sistema::MoedaBR($_SESSION['PED']['frete']));
        $_SESSION['PED']['total_com_frete'] = ($_SESSION['PED']['frete'] + $carrinho->GetTotal()) ;
        $smarty->assign('TOTAL_FRETE', Sistema::MoedaBR($_SESSION['PED']['total_com_frete']));
        $smarty->assign('NOME_CLIENTE', $_SESSION['CLI']['cli_nome']);
        $smarty->assign('SITE_NOME', Config::SITE_NOME);
        $smarty->assign('SITE_HOME', Rotas::get_SiteHOME());
        $smarty->assign('PAG_MINHA_CONTA', Rotas::pag_ClientePedidos());
        $smarty->display('pedido_finalizar.tpl');

        $pedido = new Pedidos();
        $cliente = $_SESSION['CLI']['cli_id'];
        $cod = $_SESSION['PED']['pedido'];
        $ref = $_SESSION['PED']['ref'];
        $frete = $_SESSION['PED']['frete'];

        $email = new EnviarEmail();

        $destinatarios = array(Config::SITE_EMAIL_ADM, $_SESSION['CLI']['cli_email']);
        $assunto = 'Loja de Chuteira Thiarles - ' . Sistema::DataAtualBR();
        $msg = $smarty->fetch('email_compra.tpl');

        $email->Enviar($assunto, $msg, $destinatarios);

        if($pedido->GravarPedido($cliente, $cod, $ref, $frete))
        {
            $pedido->LimparSessoes();
        }
        // var_dump($carrinho->GetCarrinho());
    }
    else
    {
        echo '<h4>Não possui produtos no carrinho! </h4>';
        //REDIRECIONAR PARA PÁGINA DE PRODUTOS
        Rotas::Redirecionar(1, Rotas::pag_Chegados());
    }
}




?>