<?php

    $smarty = new Template();

    $clientes = new Cliente();

    if(isset($_POST['cli_nome']) && isset($_POST['cli_email']) && isset($_POST['cli_cpf']))
    {
        // Valores vindo do formulário
        $cli_id = $_POST['cli_id'];
        $cli_nome = $_POST['cli_nome'];
        $cli_sobrenome = $_POST['cli_sobrenome'];
        $cli_data_nasc = $_POST['cli_data_nasc'];
        $cli_rg        = $_POST['cli_rg'];
        $cli_cpf       = $_POST['cli_cpf'];
        $cli_ddd       = $_POST['cli_ddd'];
        $cli_fone      = $_POST['cli_fone'];
        $cli_celular   = $_POST['cli_celular'];
        $cli_endereco  = $_POST['cli_endereco'];
        $cli_numero    = $_POST['cli_numero'];
        $cli_bairro    = $_POST['cli_bairro'];
        $cli_cidade    = $_POST['cli_cidade'];
        $cli_uf        = $_POST['cli_uf'];
        $cli_cep       = $_POST['cli_cep'];
        $cli_email     = $_POST['cli_email'];
        $cli_senha     = "";
        $cli_data_cad  = "";
        $cli_hora_cad  = "";


        //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS

        $clientes->Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_rg, $cli_cpf, $cli_ddd, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha);

        if(!$clientes->EditarADM($cli_id))
        {
            echo '
            <section class="arrivals" id="erro_mostrar">

                <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
                <h2 class="text-3xl font-medium text-white-600">Ocorreu um erro ao editar dados</h2>
                </div>

            </section>
            ';
            exit();
        }
        else
        {
            echo '<script> alert("Dados alterados com sucesso! 
            Atualizando os dados do Login...") </script>';
            Rotas::Redirecionar(1, Rotas::pag_ClientesADM());

        }


    }
    else {
        if(isset(Rotas::$pag[1]))
        {
            $id = Rotas::$pag[1];
        } 
        else
        {
            $id = 0;
        }

        $id = Rotas::$pag[1];

        $clientes->GetClientesID($id);

        foreach ($clientes->GetItens()[1] as $campo => $valor) {

            $smarty->assign(strtoupper($campo), $valor);

        }

        $smarty->display('adm_clientes_editar.tpl');
    }

?>
