<?php
/* Smarty version 3.1.31, created on 2022-12-02 02:11:42
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\adm\view\adm_clientes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6389890eb04396_21048866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e102769c512bd0f93e3a6ad01f3d576329cb5ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\adm\\view\\adm_clientes.tpl',
      1 => 1669957899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6389890eb04396_21048866 (Smarty_Internal_Template $_smarty_tpl) {
?>
<main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8 ">
      <div class="flex min-h-full items-stretch justify-center text-center sm:items-center sm:px-6 lg:px-8 mb-10 mt-10">

      <div class="relative flex w-full flex-col overflow-hidden bg-white pt-6 pb-8 sm:rounded-lg sm:pb-6 lg:py-8">

      <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-medium text-orange-600">Gereciar Clientes</h2>
      </div>
        <table class="table-auto mt-10 text-2xl p-4">
          <thead>
            <tr>
              <th></th>
              <th>Nome</th>
              <th>Email</th>
              <th>Fone</th>
              <th>Data cad</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLIENTES']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
            <tr>
              <td class="flex pl-8 sm:items-center mt-5 mb-5">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PEDIDOS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
 " class="btn btn-success">Pedidos</a>
              </td>
              <td class="mt-1 text-orange-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_sobrenome'];?>
</td>
              <td class="mt-1 text-gray-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
              <td class="mt-1 text-gray-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_fone'];?>
</td>
              <td class="mt-1 text-gray-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_data_cad'];?>
</td>
              <td class="mt-1 text-orange-500 text-2xl">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_EDITAR']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" class="btn btn-success"> Ver </a>
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
    
    </center>
    </section><?php }
}
