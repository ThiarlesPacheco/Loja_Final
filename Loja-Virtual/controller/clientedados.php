<?php

    $smarty = new Template();

    Login::MenuCliente();

    foreach($_SESSION['CLI'] as $campo => $valor)
    {
        $smarty->assign(strtoupper($campo), $valor);
    }

    if(isset($_POST['cli_nome']) && isset($_POST['cli_email']) && isset($_POST['cli_cpf']))
    {
        // Valores vindo do formulário
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
        $cli_senha     = $_POST['cli_senha'];
        $cli_data_cad  = $_SESSION['CLI']['cli_data_cad'];
        $cli_hora_cad  = $_SESSION['CLI']['cli_hora_cad'];

        if($_SESSION['CLI']['cli_pass'] != md5($cli_senha))
        {
            echo '
                <section class="arrivals" id="erro_mostrar">

                    <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
                    <h2 class="text-3xl font-medium text-white-600">A senha para confirmar a alteração está incorreta</h2>
                    </div>
            ';
            Sistema::VoltarPagina();
            echo '</section>';
            exit();
        }

        $clientes = new Cliente();

        //CHAMAR A FUNÇÃO PARA PREPARAR OS DADOS

        $clientes->Preparar($cli_nome, $cli_sobrenome, $cli_data_nasc, $cli_rg, $cli_cpf, $cli_ddd, $cli_fone, $cli_celular, $cli_endereco, $cli_numero, $cli_bairro, $cli_cidade, $cli_uf, $cli_cep, $cli_email, $cli_data_cad, $cli_hora_cad, $cli_senha);

        if(!$clientes->Editar($_SESSION['CLI']['cli_id']))
        {
            echo '
            <section class="arrivals" id="erro_mostrar">

                <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
                <h2 class="text-3xl font-medium text-white-600">Ocorreu um erro ao editar dados</h2>
                </div>

            </section>
            ';
            // Sistema::VoltarPagina();
            // echo '';
            exit();
        }
        else
        {
            echo '<script> alert("Dados alterados com sucesso! 
            Atualizando os dados do Login...") </script>';
            // echo '
            // <section class="arrivals" id="erro_mostrar">

            //     <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-green-600">
            //     <h2 class="text-3xl font-medium text-white-600">Dados atualizados com sucesso! Atualizando  dados do Login...</h2>
            //     </div>

            // </section>
            // ';

            $login = new Login();
            $login->GetLogin($cli_email, $cli_senha);
        }


    }
    else {
        $smarty->display('clientedados.tpl');
    }

?>