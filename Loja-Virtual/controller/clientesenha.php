<?php

    $smarty = new Template();

    Login::MenuCliente();


    if(isset($_POST['cli_senha_atual']) && isset($_POST['cli_senha']))
    {
        $senha_atual = md5($_POST['cli_senha_atual']);
        $senha_nova = $_POST['cli_senha'];
        $email = $_SESSION['CLI']['cli_email'];

        if($senha_atual != $_SESSION['CLI']['cli_pass'])
        {
            echo '
                <section class="arrivals" id="erro_mostrar">

                    <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
                    <h2 class="text-3xl font-medium text-white-600">A senha atual está incorreta!</h2>
                    </div>

                </section>
            ';
            Rotas:: Redirecionar(3, Rotas::pag_ClienteSenha());
            exit();
        }

            $clientes = new Cliente();
            $clientes->SenhaUpdate($senha_nova, $email);
      
            echo '<script> alert("A Senha foi alterada com sucesso!") </script>';
            $login = new Login();
            $login->GetLogin($email, $senha_nova);
            Rotas:: Redirecionar(0, Rotas::pag_MinhaConta());
    }
    else
    {
        $smarty->display('clientsenha.tpl');
    }

?>