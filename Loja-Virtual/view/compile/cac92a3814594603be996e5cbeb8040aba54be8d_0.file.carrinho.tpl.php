<?php
/* Smarty version 3.1.31, created on 2022-11-28 08:31:22
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\carrinho.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638463cad8ac85_77846859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cac92a3814594603be996e5cbeb8040aba54be8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\carrinho.tpl',
      1 => 1669620676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638463cad8ac85_77846859 (Smarty_Internal_Template $_smarty_tpl) {
?>

  
    <main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8 ">
      <div class="flex min-h-full items-stretch justify-center text-center sm:items-center sm:px-6 lg:px-8 mb-10 mt-10">

      <div class="relative flex w-full flex-col overflow-hidden bg-white pt-6 pb-8 sm:rounded-lg sm:pb-6 lg:py-8">

      <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-medium text-orange-600">Meu Carrinho</h2>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CHEGADOS']->value;?>
" class="text-white hover:text-gray-500 text-2xl rounded-md border border-transparent bg-orange-600 py-2 px-4 cursor-pointer">
          Comprar +
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
              <td class="mt-1 text-gray-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
              <td class="mt-1 text-gray-500 text-2xl"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
              <td>
                <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                  <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                  <input type="hidden" name="acao" value="del">
                  <button class="ml-4 font-medium text-orange-600 hover:text-orange-700 sm:ml-0 sm:mt-2">
                  <span>Remover</span>
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

        <!-- campos para tratar  do  frete -->
        <div id="dadosfrete">
          <input type="hidden" name="peso_frete" id="peso_frete" value="<?php echo $_smarty_tpl->tpl_vars['PESO']->value;?>
" readonly>
          
          <input type="text" name="cep_frete" id="cep_frete" value="" class="w-full rounded-md border border-blue-gray-300 px-5 py-3 placeholder-blue-gray-400 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 sm:max-w-xs text-2xl" placeholder="digite seu cep">
          
          <input type="hidden" name="frete_valor" id="frete_valor" value="0">

          <button class="btn btn-geral btn-block" id="buscar_frete"> Calcular Frete </button>
        </div>

        <form action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
" method="post" name="pedido_confirmar" id="pedido_confirmar">
          <section aria-labelledby="summary-heading" class="mt-auto sm:px-6 lg:px-8">
              <div class="bg-gray-50 p-6 sm:rounded-lg sm:p-8">
                <h2 id="summary-heading" class="sr-only">Order summary</h2>
                
                <div class="flow-root">
                  <dl class="-my-4 divide-y divide-gray-200 text-2xl">
                    <div class="flex items-center justify-between py-4">
                      
                      <dd class="font-medium text-gray-900">
                      </dd>
                    </div>
                    <div class="flex items-center justify-between py-4">
                      <dt class="text-gray-600">Frete</dt>
                      <dd class="font-medium text-gray-900" id="frete">
                        $ 0
                      </dd>
                    </div>
                    <div class="flex items-center justify-between py-4 text-2xl">
                      <dt class="text-base font-medium text-gray-900 text-3xl">Total</dt>
                      <dd class="text-base font-medium text-gray-900 text-3xl">R$ <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</dd>
                    </div>
                  </dl>
                </div>
              </div>
            </section>

            <div class="mt-8 flex justify-end px-4 sm:px-6 lg:px-8">
              <button type="submit" class="rounded-md border border-transparent bg-orange-600 py-2 px-4 text-2xl font-medium text-white shadow-sm hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Confirmar Pedido</button>
            </div>
        </form>
      </div>
    </main>

    <?php echo '<script'; ?>
>
  $(document).ready(function(){    
  
     // validar frete
       $('#buscar_frete').click(function(){  
          
        var CEP_CLIENTE = $('#cep_frete').val();
        var PESO_FRETE = $('#peso_frete').val();
         
          if (CEP_CLIENTE.length !== 8 ) {
          alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');  
           $('#frete').addClass(' text-center text-danger');
           $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
          $('#cep_frete').focus();
          } else {
       
         
          $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
          $('#frete').addClass(' text-center text-danger');
        
          // carrego o combo com os bairros
         
          // console.log(CEP_CLIENTE);
          // console.log(PESO_FRETE);

          $('#frete').load('controller/frete.php?cepcliente='+CEP_CLIENTE+'&pesofrete='+PESO_FRETE);
   
   } // fim do IF digitei o CEP
        
   
      }); // fim do change
      
     
  } ); // fim do ready
  
  <?php echo '</script'; ?>
><?php }
}
