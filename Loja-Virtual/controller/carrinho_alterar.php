<?php

    //VERIFICAR SE O ID FOR VAZIO OU SE O NÚMERO FOR NEGATIVO: VAI MOSTRAR O ERRO;
    if(!isset($_POST['pro_id']) or $_POST['pro_id'] < 1)
    {
        echo '<h4>Erro na operação</h4>';
        Rotas::Redirecionar(1, Rotas::pag_Carrinho());
        exit();
    }

    $id = (int)$_POST['pro_id'];

    $carrinho = new Carrinho();

    try {
        $carrinho->CarrinhoADD($id);
    } catch (\Throwable $th) {
        echo '<h4>Erro na operação</h4>';
    }
    
    //REDIRECIONAR PARA O CARRINHO
    Rotas::Redirecionar(0, Rotas::pag_Carrinho());

?>