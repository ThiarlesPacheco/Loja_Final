<?php
    $smarty = new Template();
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    if(Login::LogadoADM())
{
    $smarty->assign('USER', $_SESSION['ADM']['user_nome']);
    $smarty->assign('DATA', $_SESSION['ADM']['user_data']);
    $smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
}
    $smarty->display('adm_home.tpl');
?>

<!--FIM DA SESSÃO PRINCIPAL-->
