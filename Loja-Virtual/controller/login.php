<?php

$smarty = new Template();

$login = new Login();

if(isset($_POST['txt_email']) && isset($_POST['txt_senha']))
{
    $user = $_POST['txt_email'];
    $senha = $_POST['txt_senha'];

    $login->GetLogin($user, $senha);
}

// Se não tiver logado recebe vazio
$smarty->assign('USER', '');

// Logado
if(Login::Logado())
{
    $smarty->assign('USER', $_SESSION['CLI']['cli_nome']);
    $smarty->assign('PAG_LOGOFF', Rotas::pag_Logoff());
    Login::MenuCliente();
}

// Verificar se o cliente está logado 
$smarty->assign('LOGADO', Login::Logado());
$smarty->assign('PAG_CADASTRO', Rotas::pag_ClienteCadastro());
$smarty->assign('PAG_RECOVERY', Rotas::pag_ClienteRecovery());
$smarty->assign('MINHACONTA', Rotas::pag_MinhaConta());



$smarty->display('login.tpl');