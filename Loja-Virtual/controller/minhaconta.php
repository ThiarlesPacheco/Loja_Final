<?php
    $smarty = new Template();

    Login::MenuCliente();
    
    $smarty->display('minhaconta.tpl');
?>