<?php

    $smarty = new Template();


    if(isset($_POST['adm_senha_atual']) && isset($_POST['adm_senha']))
    {
        $senha_atual = md5($_POST['adm_senha_atual']);
        $senha_nova = $_POST['adm_senha'];
        $email = $_SESSION['ADM']['user_email'];

        if($senha_atual != $_SESSION['ADM']['user_pw'])
        {
            echo '
                <section class="arrivals" id="erro_mostrar">

                    <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
                    <h2 class="text-3xl font-medium text-white-600">A senha atual está incorreta!</h2>
                    </div>

                </section>
            ';
            Rotas:: Redirecionar(3, Sistema::VoltarPagina());
            exit();
        }

        $user = new User();
        if ($user->AlterarSenha($senha_nova, $email)):

                // apos alterar envia email com a nova senha
                $enviar = new EnviarEmail();
                
                $assunto = 'Alteração da senha ADM no site '. Sistema::DataAtualBR();
                $destinatarios = array($email,  Config::SITE_EMAIL_ADM);
                $msg = '<h3> Foi feito alteração de senha ADM no site neste momento, nova senha:  ' . $senha_nova .'</h3>';
                        
                $enviar->Enviar($assunto, $msg, $destinatarios);
                // fim do email 
                echo '
                <section class="arrivals" id="erro_mostrar">

                    <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10 bg-red-600">
                    <h2 class="text-3xl font-medium text-white-600">Senha alterada com sucesso! Já pode fazer login com sua nova senha!! </h2>
                    </div>

                </section>
            ';
            
            // faz redirecioamento para LOGOFF
                Rotas::Redirecionar(2, Rotas::pag_LogoffADM());

            else:

                echo '<div class="alert alert-danger"> Erro ao tentar alterar a senha  </div>';


            endif;
           
    }
    else
    {
        $smarty->display('adm_senha.tpl');
    }

?>