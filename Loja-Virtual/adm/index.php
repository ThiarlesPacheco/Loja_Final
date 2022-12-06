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

require '../lib/smarty/smarty/libs/Smarty.class.php';
require('../lib/autoload.php');

if(!Login::LogadoADM())
{
    Rotas::Redirecionar(0, 'login.php');
    // echo '<script> alert("Erro ao acessar a área do administrador!!") </script>';
   
}

$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();

//ASSOCIAÇÃO PARA CHAMAR AS ROTAS Exemplo: <a href="{$GET_HOME}">Home</a>
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADM', Rotas::get_SiteADM());
$smarty->assign('PAG_ADM_CLIENTE', Rotas::pag_ClientesADM());
$smarty->assign('PAG_ADM_PEDIDOS', Rotas::pag_PedidosADM());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_CategoriasADM());
$smarty->assign('PAG_ADM_PRODUTOS', Rotas::pag_ProdutosADM());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::LogadoADM());
$smarty->assign('PAG_LOGOFF', Rotas::pag_LogoffADM());
$smarty->assign('PAG_SENHA', Rotas::get_SiteADM() .'/adm_senha');



if(Login::LogadoADM())
{
    $smarty->assign('USER', $_SESSION['ADM']['user_nome']);
    $smarty->assign('DATA', $_SESSION['ADM']['user_data']);
    $smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
}


//TÍTULO DO SITE 
$smarty->assign('TITULO_SITE', Config::SITE_NOME);

//CHAMAR A CLASSE CONEXÃO
$dados = new Conexao();
$sql = "SELECT * FROM categorias";
$dados->ExecuteSQL($sql);

$smarty->display('adm_index.tpl');

?>