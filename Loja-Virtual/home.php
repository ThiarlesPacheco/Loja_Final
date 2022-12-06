<?php
    $smarty = new Template();
    $smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
    $smarty->display('home.tpl');
?>

<!--FIM DA SESSÃO PRINCIPAL-->
<?php
    include_once Rotas::get_Pasta_Controller() . '/produtos.php';
    include_once Rotas::get_Pasta_Controller() . '/sobrenos.php';
    include_once Rotas::get_Pasta_Controller() . '/prod_chegados.php';
    include_once Rotas::get_Pasta_Controller() . '/contato.php';
?>