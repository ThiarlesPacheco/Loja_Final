<?php
/* Smarty version 3.1.31, created on 2022-12-01 16:06:24
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\adm\view\adm_produtos_editar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6388fb3099d763_53373143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c84b3e03d4bac284d90ad0982a6c7ef44075101' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\adm\\view\\adm_produtos_editar.tpl',
      1 => 1669921580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6388fb3099d763_53373143 (Smarty_Internal_Template $_smarty_tpl) {
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
                <input data-aos="zoom-in" type="text"  class="box" name="pro_nome" id="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_nome'];?>
">
            </div>
            <div style="width: 50%;">
                <label for="pro_categoria">Categoria</label>
                <select name="pro_categoria" id="pro_categoria" class="box" required>

                    <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cat_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['cat_nome'];?>
 </option>                           
                    <option value=""> Escolha</option>                           
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
              
                    <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ativo'];?>
 </option>
                    <option value=""> Escolha </option>
                    <option value="NAO"> Não </option>
                    <option value="SIM"> Sim </option>
                
                </select>
            </div>
            <div style="width: 20%;">
                <label for="pro_modelo">Modelo</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_modelo" id="pro_modelo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_modelo'];?>
">
            </div>

            <div style="width: 20%;">
                <label for="pro_ref">Referência</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_ref" id="pro_ref" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_ref'];?>
">
            </div>

            <div style="width: 20%;">
                <label for="pro_valor">Valor</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_valor" id="pro_valor" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_valor'];?>
" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_estoque">Estoque</label>
                <input data-aos="zoom-in" type="text" class="box" name="pro_estoque" id="pro_estoque" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_estoque'];?>
" required>
            </div>
        </div>


        <div class="flex  justify-between gap-4">
            <div style="width: 20%;">
                <label for="pro_peso">Peso</label>
                <input type="text" name="pro_peso" id="pro_peso" class="box" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_peso'];?>
" required >
            </div>
            <div style="width: 20%;">
                <label for="pro_altura">Altura</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_altura" id="pro_altura" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_altura'];?>
"  required>
            </div>

            <div style="width: 20%;">
                <label for="pro_largura">Largura</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_largura" id="pro_largura" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_largura'];?>
" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_comprimento">Comprimento</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_comprimento" id="pro_comprimento" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_comprimento'];?>
" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_img">Imagem Principal</label>
                <input data-aos="zoom-in" type="file" name="pro_img" class="box" id="pro_img">
                 <!--pega o nome da imagem atual -->
                 <input type="hidden" name="pro_img_atual" id="pro_img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_atual'];?>
">
                 <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">

                <div class="col-md-4">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img'];?>
" class="thumbnail" alt="">  
                </div>
            </div>
        </div>

        <div class="flex  justify-between gap-4">
            <div style="width: 100%;">
                <label for="pro_desc">Descrição</label>
                <textarea data-aos="zoom-in" name="pro_desc" id="pro_desc" class="box" cols="30" rows="10" ><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_desc'];?>
</textarea>
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
                <input data-aos="zoom-in" type="text" class="box" readonly name="pro_slug" id="pro_slug" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_slug'];?>
">
            </div>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Editar" class="btn">
        </div>
            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
        </form>

    </div>

</section>

        
        
        
        <!---bloco de apagar o produto -->
        <section class="row">

            

            <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">            

                <form name="frm_apagar" method="post" action="">
                    <label class="text-center">Apagar este produto?</label>

                    <input type="radio" name="confirmar" value="SIM" required>
                    <!---botao que apagar o produto de uma vez -->
                    <button class="btn btn-danger " name="btn_apagar"><i class="glyphicon glyphicon-remove"></i> Apagar Produto </button> 




                    <input type="hidden" name="pro_id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_id'];?>
">
                    <input type="hidden" name="pro_apagar" value="SIM">
                    
                       <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['pro_img_arquivo'];?>
">

                </form>

            </div>

        </section>
        

 

<?php }
}
