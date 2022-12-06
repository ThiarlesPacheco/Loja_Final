<?php

    $smarty = new Template();

    $cliente = new Cliente();

    if(isset($_POST['cli_email']))
    {
        $cliente->setCli_email($_POST['cli_email']);

        if($cliente->GetClienteEmail($cliente->getCli_email()) > 0)
        {
            $novasenha = Sistema::GerarSenha();
            $cliente->SenhaUpdate($novasenha, $cliente->getCli_email());

            //ENVIAR O EMAIL PARA O CLIENTE
            $email = new EnviarEmail();
            $assunto = 'Nova Senha- ' . Config::SITE_NOME;
            $msg = 'Oi cliente, uma nova senha foi solicitada por você, acesse o site: '.Config::SITE_NOME;
            $msg .= '<br> Nova Senha = '.$novasenha;
            $destinatarios = array($cliente->getCli_email(), Config::SITE_EMAIL_ADM);
            $email->Enviar($assunto, $msg, $destinatarios);

            echo '
                <section class="arrivals" id="erro_mostrar">

                    <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-green-600">
                    <h2 class="text-3xl font-medium text-white-600">Uma nova senha foi emviada em seu email de cadastro!!</h2>
                    </div>

                </section>
            ';
            Rotas::Redirecionar(5, Rotas::pag_ClienteLogin());
        }
        else
        {
            echo '
                <section class="arrivals" id="erro_mostrar">

                    <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
                    <h2 class="text-3xl font-medium text-white-600"> ERRO -  <br> </h2>
                    <h2 class="text-3xl font-medium text-white-600">Este email não existe! Insira um email válido!</h2> 
                    </div>

                </section>
            ';
            Rotas::Redirecionar(2, Rotas::pag_ClienteRecovery());
        }
    }
    else
    {
        $smarty->display('recovery.tpl');
    }

    

    

?>