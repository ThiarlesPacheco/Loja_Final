<?php
/* Smarty version 3.1.31, created on 2022-11-30 00:24:50
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\clientsenha.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638694c2ce09c5_35605750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8a216e15c36c1aa863089c43db971c19a816435' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\clientsenha.tpl',
      1 => 1669764281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638694c2ce09c5_35605750 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="contact" id="contact">

    <h1 class="heading"> <span>Alterar </span> Senha </h1>

    <div class="row">
        <form method="post" action="" class="flex flex-col">

        <h3 class="heading"> Alterar senha  de acesso ao sistema</h3>

        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="password" placeholder="Digite sua senha atual" class="box" name="cli_senha_atual" required>
        </div>
        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="password" placeholder="Digite sua nova senha" class="box" name="cli_senha" required>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Alterar" class="btn">
        </div>

        </form>

    </div>

</section><?php }
}
