<?php
/* Smarty version 3.1.31, created on 2022-11-29 20:10:07
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\cadastro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6386590fdf9a72_50165068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc03a923cc0ae635fb2aecda20239b9f237337b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\cadastro.tpl',
      1 => 1669746634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6386590fdf9a72_50165068 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="contact" id="contact">

    <h1 class="heading"> <span>Faça o seu</span> Cadastro </h1>

    <div class="row">
        <form name="cliente_login" method="post" action="" class="flex flex-col">

        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="text" placeholder="Nome" class="box" name="cli_nome" required>
            <input data-aos="zoom-in" type="text" placeholder="Sobrenome" class="box" name="cli_sobrenome" required>
        </div>
        
        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="date" class="box" name="cli_data_nasc" required>
            <input data-aos="zoom-in" type="text" placeholder="RG"class="box" name="cli_rg" required>
            <input data-aos="zoom-in" type="text" placeholder="CPF"class="box" name="cli_cpf" required>
            <input data-aos="zoom-in" type="text" placeholder="DDD" class="box" name="cli_ddd" required>
            <input data-aos="zoom-in" type="text" placeholder="Telefone" class="box" name="cli_fone" required>
        </div>
        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="number" placeholder="Celular" class="box" name="cli_celular" required>
        </div>
        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="text" placeholder="Endereço" class="box" name="cli_endereco" required>
            <input data-aos="zoom-in" type="text" placeholder="Numero" class="box" name="cli_numero" required>
        </div>
        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="text" placeholder="Bairro" class="box" name="cli_bairro" required>
            <input data-aos="zoom-in" type="text" placeholder="Cidade" class="box" name="cli_cidade" required>
        </div>
        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="text" placeholder="UF" class="box" name="cli_uf" required>
            <input data-aos="zoom-in" type="text" placeholder="CEP" class="box" name="cli_cep" required>
        </div>
        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="email" placeholder="Email" class="box" name="cli_email" required>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Cadastrar" class="btn">
        </div>

        </form>

    </div>

</section>
<?php }
}
