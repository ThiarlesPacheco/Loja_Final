<?php
/* Smarty version 3.1.31, created on 2022-11-28 08:46:08
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\pedido_finalizar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_63846740108355_35972631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ca63aa7653d2c62ad9f8843fe30e4520a8f57a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\pedido_finalizar.tpl',
      1 => 1669621524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63846740108355_35972631 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8 ">
    <div class="flex min-h-full items-stretch justify-center text-center sm:items-center sm:px-6 lg:px-8 mb-10 mt-10">

    <div class="relative flex w-full flex-col overflow-hidden bg-white pt-6 pb-8 sm:rounded-lg sm:pb-6 lg:py-8">

    <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8">
      <h4 class="text-2xl font-medium text-green-600">Pedido finalizado com sucesso</h4>
    </div>
    <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl font-medium text-orange-600">Finalizar Pedido</h2>
    </div>
      <table class="table-auto mt-10 text-2xl p-4">
        <thead>
          <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
          <tr>
            <td class="mt-1 text-orange-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</td>
            <td class="mt-1 text-gray-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
            <td class="mt-1 text-gray-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
          </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </tbody>
      </table>
      <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_FINALIZAR']->value;?>
" method="post" name="pedido_finalizar" id="pedido_finalizar">
        <section aria-labelledby="summary-heading" class="mt-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 p-6 sm:rounded-lg sm:p-8">
              <h2 id="summary-heading" class="sr-only">Order summary</h2>

              <div class="flow-root">
                <dl class="-my-4 divide-y divide-gray-200 text-2xl">
                  <div class="flex items-center justify-between py-4 text-2xl">
                    <dt class="text-base font-medium text-gray-900 text-3xl">Total</dt>
                    <dd class="text-base font-medium text-gray-900 text-3xl">R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</dd>
                  </div>
                  <div class="flex items-center justify-between py-4 text-2xl">
                    <dt class="text-base font-medium text-gray-900 text-3xl">Frete</dt>
                    <dd class="text-base font-medium text-gray-900 text-3xl">R$ <?php echo $_smarty_tpl->tpl_vars['FRETE']->value;?>
</dd>
                  </div>
                  <div class="flex items-center justify-between py-4 text-2xl">
                    <dt class="text-base font-medium text-gray-900 text-3xl">Total com frete</dt>
                    <dd class="text-base font-medium text-gray-900 text-3xl">R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</dd>
                  </div>
                </dl>
              </div>
            </div>
          </section>
          
          <h2 class="mx-4 text-4xl font-medium text-orange-600 text-left">Formas de Pagamento</h2>
          <div class="mt-2 flex border-slate-100">
            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png" class="border-0 p-2">
            <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pix.png" class="border-0 p-2 pt-5" style="width: 300px; height:80px object-fit: cover;">
          </div>
      </form>
    </div>
  </main><?php }
}
