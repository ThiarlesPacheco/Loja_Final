<?php
/* Smarty version 3.1.31, created on 2022-12-02 01:04:48
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\adm\view\adm_categorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_63897960692684_75428122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4bf54aad00fa8dc43e3192f43c2fabdd41882b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\adm\\view\\adm_categorias.tpl',
      1 => 1669952873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63897960692684_75428122 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="contact" id="contact">

<div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10">
<h2 class="text-4xl font-medium text-orange-600">Gerenciar Categorias</h2>
</div>

    <div class="row">
        <form name="categoriainsere" method="post" action="">
            
            <div class="col-md-4">
                <input data-aos="zoom-in" type="text" name="cate_nome" class="box" required>  
            </div>

            <div>
                <button class="btn btn-success" name="cate_nova" value="cate_nova"> Inserir nova </button>
            </div>
            <div class="col-md-4"></div>
        </form>
    </div>

    
    <center>
    <div class="row">
    <table class="table table-bordered" style="width: 90%">
        
      
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
            <form name="categorias_editar" method="post" action="">
               
                <tr>
                    <td class="mt-1 text-black-500 text-2xl">
                         <input data-aos="zoom-in" type="text" name="cate_nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_nome'];?>
" class="box" required> 
                          <input data-aos="zoom-in" type="hidden" name="cate_id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cat_id'];?>
" class="box">
                    </td>
                       
                    <td>
                        <button class="btn btn-success" name="cate_editar" value="cate_editar">Editar</button>
                    </td>
                   
                    <td>
                        <button class="btn btn-danger" name="cate_apagar" value="cate_apagar">Apagar</button>
                    </td>


                </tr>        

            </form>
            
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        
    </table>
    </div>
    </center>

</section>
<hr>
<?php }
}
