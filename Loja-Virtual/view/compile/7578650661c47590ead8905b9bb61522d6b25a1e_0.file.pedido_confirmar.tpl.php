<?php
/* Smarty version 3.1.31, created on 2022-11-28 08:30:20
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\pedido_confirmar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6384638ceea562_25589100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7578650661c47590ead8905b9bb61522d6b25a1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\pedido_confirmar.tpl',
      1 => 1669620616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6384638ceea562_25589100 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8 ">
    <div class="flex min-h-full items-stretch justify-center text-center sm:items-center sm:px-6 lg:px-8 mb-10 mt-10">

    <div class="relative flex w-full flex-col overflow-hidden bg-white pt-6 pb-8 sm:rounded-lg sm:pb-6 lg:py-8">

    <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8">
      <h2 class="text-4xl font-medium text-orange-600">Confirmar Pedido</h2>
      <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
" class="text-white hover:text-gray-500 text-2xl rounded-md border border-transparent bg-orange-600 py-2 px-4 cursor-pointer">
        Voltar para Carrinho
        <!-- Heroicon name: outline/x-mark -->
      </a>
    </div>
      <table class="table-auto mt-10 text-2xl p-4">
        <thead>
          <tr>
            <th></th>
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
            <td class="flex pl-8 sm:items-center mt-5 mb-5">
              <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" class="flex-none rounded-lg border border-gray-200 w-40 h-40">
            </td>
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
                    <dt class="text-base font-medium text-gray-900 text-3xl">Total com Frete</dt>
                    <dd class="text-base font-medium text-gray-900 text-3xl">R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL_FRETE']->value;?>
</dd>
                  </div>
                </dl>
              </div>
            </div>
          </section>

          <div class="mt-8 flex justify-end px-4 sm:px-6 lg:px-8">
            <button type="submit" class="rounded-md border border-transparent bg-orange-600 py-2 px-4 text-2xl font-medium text-white shadow-sm hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Finalizar Pedido</button>
          </div>
      </form>
    </div>
  </main><?php }
}
