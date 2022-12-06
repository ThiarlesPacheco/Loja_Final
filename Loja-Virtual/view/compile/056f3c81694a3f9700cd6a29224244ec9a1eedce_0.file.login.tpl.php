<?php
/* Smarty version 3.1.31, created on 2022-11-26 20:23:36
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638267b8b46311_92676209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '056f3c81694a3f9700cd6a29224244ec9a1eedce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\login.tpl',
      1 => 1669489871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638267b8b46311_92676209 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>

  
<?php } else { ?>
<section class="contact" id="contact">

    <h1 class="heading"> <span>Faça o seu</span> Login </h1>

    <div class="row">

        <div class="map">
        <main>
        <div class="relative px-6 lg:px-8">
          <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-48 sm:pb-40">
            <div>
              <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative overflow-hidden rounded-full py-1.5 px-4  leading-6 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                  <span class="text-orange-600 sm:text-2xl">
                    Click aqui, se você não for cadastrado. <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Cadastra-se <span aria-hidden="true">&rarr;</span></a>
                  </span>
                </div>
              </div>
              <div>
                <h1 class="font-bold tracking-tight sm:text-center sm:text-6xl text-white">Ainda não fez o seu cadastro?</h1>
                <p class="mt-6 leading-8 text-gray-600 sm:text-center sm:text-2xl">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>


                <div class="mt-8 flex gap-x-4 sm:justify-center">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CADASTRO']->value;?>
" class="inline-block rounded-lg bg-orange-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-orange-700 sm:text-2xl">
                    Cadastrar
                    <span class="text-indigo-200" aria-hidden="true">&rarr;</span>
                  </a>

                  <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_RECOVERY']->value;?>
" class="inline-block rounded-lg bg-orange-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-orange-700 sm:text-2xl">
                  Esqueci a senha
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
        </div>

        <form name="cliente_login" method="post" action="">
            <h3 data-aos="zoom-in">Login</h3>
            <input data-aos="zoom-in" type="email" placeholder="Digite seu Email" class="box" name="txt_email" required>
            <input data-aos="zoom-in" type="password" placeholder="Digite sua Senha" class="box" name="txt_senha" required>
            <input data-aos="zoom-in" type="submit" value="Login" class="btn">
        </form>

    </div>

</section>

<?php }
}
}
