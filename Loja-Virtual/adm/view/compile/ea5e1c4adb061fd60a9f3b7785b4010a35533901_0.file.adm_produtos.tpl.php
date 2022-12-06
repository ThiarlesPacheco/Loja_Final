<?php
/* Smarty version 3.1.31, created on 2022-12-01 16:51:06
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\adm\view\adm_produtos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638905aad37d81_70171344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea5e1c4adb061fd60a9f3b7785b4010a35533901' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\adm\\view\\adm_produtos.tpl',
      1 => 1669924186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638905aad37d81_70171344 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8 ">
      <div class="flex min-h-full items-stretch justify-center text-center sm:items-center sm:px-6 lg:px-8 mb-10 mt-10">

      <div class="relative flex w-full flex-col overflow-hidden bg-white pt-6 pb-8 sm:rounded-lg sm:pb-6 lg:py-8">

      <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-medium text-orange-600">Gereciar Produtos</h2>
        <div class="col-md-4 text-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_NOVO']->value;?>
" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Novo Produto</a>
    </div>
      </div>
        <table class="table-auto mt-10 text-2xl p-4">
          <thead>
            <tr>
              <th></th>
              <th>Produto</th>
              <th>Categoria</th>
              <th>Preço</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
            <tr>
              <td class="flex pl-8 sm:items-center mt-5 mb-5">
                <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" class="flex-none rounded-lg border border-gray-200 w-40 h-40">
              </td>
              <td class="mt-1 text-orange-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
              <td class="mt-1 text-gray-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['P']->value['cat_nome'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
              
              <td>
                <form name="proeditar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_EDITAR']->value;?>
">
                  <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                  <button class="ml-4 font-medium text-orange-600 hover:text-orange-700 sm:ml-0 sm:mt-2">
                  <span>Editar</span>
                  </button>
                </form>
                <form name="proimg" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO_IMG']->value;?>
">
                  <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                  <input type="hidden" name="pro_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
">
                  <button class="ml-4 font-medium text-orange-600 hover:text-orange-700 sm:ml-0 sm:mt-2">
                  <span>Add + 3 imagens</span>
                  </button>
                </form>
              </td>
            </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

          </tbody>
        </table>

      </div>
    </main>

  
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    <?php echo $_smarty_tpl->tpl_vars['PAGINACAO']->value;?>

    </center>
    </section>
<?php }
}
