<?php
/* Smarty version 3.1.31, created on 2022-12-01 23:49:01
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\adm\view\adm_produtos_img.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6389679d324124_21912278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95ffdaceeb0254ef38060c80ffec53a3e387a34a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\adm\\view\\adm_produtos_img.tpl',
      1 => 1669948983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6389679d324124_21912278 (Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
label{
    color: #ef7819;
    font-size: 14pt;
    text-align: left;
    display: block;
}
</style>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
<section class="contact" id="contact">

    <h1 class="heading"> <span>Adicionar Mais</span> 3 Imagens do Produto </h1>

    <div class="row">

        <!--- formulario de envio da foto -->
        <form name="nova" method="post" action=""  enctype="multipart/form-data" class="flex flex-col">
            <div class="col-md-4">
                <input data-aos="zoom-in" type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value;?>
">
                <input data-aos="zoom-in" type="file" name="pro_img"  class="box"  required>
            </div>
            <div>
                <input data-aos="zoom-in" type="submit" value="Enviar" class="btn">
            </div>
        </form> 

    </div>

</section>

<!-- listando as imagens que existem no produto-->
<section class="contact" id="contact">
    <div class="row">
        <!-- formulario de apagar a foto ou varias -->
        <form name="deletar" method="post" action="" class="flex flex-col">
    
            <ul style="list-style: none">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
?>
                        <li class="col-md-3 ">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" class="thumbnail">

                            <label>Apagar?</label> 
                            <input data-aos="zoom-in" type="checkbox" class="box" name="fotos_apagar[]" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_arquivo'];?>
">   
                                        
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    
                    <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_pro_id'];?>
">
            </ul>

            <!--- botao de apagar fotos -->
                <section class="col-md-12 text-center" id="apagar">
                    <div>
                        <input data-aos="zoom-in" type="submit" value="Apagar Marcadas" class="btn">
                    </div>
                </section>
        </form>
    </div>
</section>


            



<?php }
}
