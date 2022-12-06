<?php
/* Smarty version 3.1.31, created on 2022-12-02 18:57:11
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\adm\view\adm_produtos_novo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638a74b7d35537_64246498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c8d6b6c53e805073025825ff8674b3907b49d77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\adm\\view\\adm_produtos_novo.tpl',
      1 => 1670018228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a74b7d35537_64246498 (Smarty_Internal_Template $_smarty_tpl) {
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

    <h1 class="heading"> <span>Adicionar Novo</span> Produto </h1>

    <div class="row">
        <form name="frm_produto" method="post" action=""  enctype="multipart/form-data" class="flex flex-col">

        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="pro_nome">Produto</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_nome" id="pro_nome" required>
            </div>
            <div style="width: 50%;">
                <label for="pro_categoria">Categoria</label>
                <select name="pro_categoria" id="pro_categoria" class="box">
              
                    <option value="teste"> Escolha </option>                           
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>                    
                        <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cat_nome'];?>
</option>                                                                           
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
                
                </select>
            </div>
        </div>
        
        <div class="flex  justify-between gap-4">
            <div style="width: 20%;">
                <label for="pro_cativo">Ativo</label>
                <select name="pro_ativo" id="pro_cativo" class="box" required>
              
                    <option value=""> Escolha </option>
                    <option value="NAO"> Não </option>
                    <option value="SIM"> Sim </option>
                
                </select>
            </div>
            <div style="width: 20%;">
                <label for="pro_modelo">Modelo</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_modelo" id="pro_modelo" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_ref">Referência</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_ref" id="pro_ref">
            </div>

            <div style="width: 20%;">
                <label for="pro_valor">Valor</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_valor" id="pro_valor" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_estoque">Estoque</label>
                <input data-aos="zoom-in" type="text" class="box" name="pro_estoque" id="pro_estoque" required>
            </div>
        </div>


        <div class="flex  justify-between gap-4">
            <div style="width: 20%;">
                <label for="pro_peso">Peso</label>
                <input type="text" name="pro_peso" id="pro_peso" class="box" required >
            </div>
            <div style="width: 20%;">
                <label for="pro_altura">Altura</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_altura" id="pro_altura"  required>
            </div>

            <div style="width: 20%;">
                <label for="pro_largura">Largura</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_largura" id="pro_largura" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_comprimento">Comprimento</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_comprimento" id="pro_comprimento" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_img">Imagem Principal</label>
                <input data-aos="zoom-in" type="file" name="pro_img" class="box" id="pro_img" required>
            </div>
        </div>

        <div class="flex  justify-between gap-4">
            <div style="width: 100%;">
                <label for="pro_desc">Descrição</label>
                <textarea data-aos="zoom-in" name="pro_desc" id="pro_desc" class="box" cols="30" rows="10" ></textarea>
                <?php echo '<script'; ?>
> 
                    tinymce.init({ selector:'textarea'  });
                <?php echo '</script'; ?>
> 
            </div>
        </div>

        <div class="flex  justify-between gap-4">
            <div style="width: 100%;">
                <label for="pro_slug">Slug</label>
                <input data-aos="zoom-in" type="text" class="box" readonly name="pro_slug" id="pro_slug">
            </div>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Gravar" class="btn">
        </div>

        </form>

    </div>

</section>
<?php }
}
