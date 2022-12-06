<?php
/* Smarty version 3.1.31, created on 2022-12-02 17:11:15
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\adm\view\adm_senha.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638a5be3c62982_57277894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ca4f58f1eba9bb02a6597128c5e66258a0ae80b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\adm\\view\\adm_senha.tpl',
      1 => 1670010959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a5be3c62982_57277894 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="contact" id="contact">

    <h1 class="heading"> <span>Alterar </span> Senha </h1>

    <div class="row">
        <form method="post" action="" class="flex flex-col">

        <h3 class="heading"> Alterar senha  de acesso ao sistema</h3>

        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="password" placeholder="Digite sua senha atual" class="box" name="adm_senha_atual" required>
        </div>
        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="password" placeholder="Digite sua nova senha" class="box" name="adm_senha" required>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Alterar" class="btn">
        </div>

        </form>

    </div>

</section><?php }
}
