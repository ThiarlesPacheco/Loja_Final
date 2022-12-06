<?php

date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION))
{
    session_start();
}

// if(!isset($_SESSION['PED']['pedido']))
// {
//     $_SESSION['pedido'] = md5(uniqid(date('YmdHms')));
// }

// if(!isset($_SESSION['PED']['ref']))
// {
//     $_SESSION['ref'] = date('ymdHms');
// }

require './lib/smarty/smarty/libs/Smarty.class.php';
require('./lib/autoload.php');

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();

//ASSOCIAÇÃO PARA CHAMAR AS ROTAS Exemplo: <a href="{$GET_HOME}">Home</a>
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_PRODUTO', Rotas::pag_Produtos());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('SOBRE_NOS', Rotas::pag_SobreNos());
$smarty->assign('MINHA_CONTA', Rotas::pag_MinhaConta());
$smarty->assign('PAG_CHEGADOS', Rotas::pag_Chegados());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGIN', Rotas::pag_ClienteLogin());
$smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
$smarty->assign('LOGADO', Login::Logado());

if(Login::Logado())
{
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
}

//TÍTULO DO SITE 
$smarty->assign('TITULO_SITE', Config::SITE_NOME);

//CHAMAR A CLASSE CONEXÃO
$dados = new Conexao();
$sql = "SELECT * FROM categorias";
$dados->ExecuteSQL($sql);
// $lista = $dados->ListarDados($sql);
// echo $dados->TotalDados();

// var_dump($lista);

//testando as Rotas;
// echo Rotas::pag_Carrinho();

//Imprimindo o index na view pelo smarty OBS: => ESSA SEMPRE TEM QUE SER A ÚLTIMA LINHA
$smarty->display('index.tpl');

?>