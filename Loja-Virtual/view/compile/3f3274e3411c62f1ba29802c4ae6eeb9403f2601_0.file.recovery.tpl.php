<?php
/* Smarty version 3.1.31, created on 2022-11-29 23:39:00
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\recovery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_63868a04b158e3_16497469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f3274e3411c62f1ba29802c4ae6eeb9403f2601' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\recovery.tpl',
      1 => 1669760873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63868a04b158e3_16497469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="contact" id="contact">

    <h1 class="heading"> <span>Recuperar </span> Senha </h1>

    <div class="row">
        <form method="post" action="" class="flex flex-col">

        <h2 class="heading"> Digite seu E-mail cadastrado para receber nova Senha </h2>

        <div class="flex  justify-between gap-4">
            <input data-aos="zoom-in" type="email" placeholder="Digite seu E-mail" class="box" name="cli_email" required>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Recuperar" class="btn">
        </div>

        </form>

    </div>

</section>


<?php }
}
