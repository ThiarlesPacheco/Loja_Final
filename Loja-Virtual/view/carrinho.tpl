
  
    <main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8 ">
      <div class="flex min-h-full items-stretch justify-center text-center sm:items-center sm:px-6 lg:px-8 mb-10 mt-10">

      <div class="relative flex w-full flex-col overflow-hidden bg-white pt-6 pb-8 sm:rounded-lg sm:pb-6 lg:py-8">

      <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-medium text-orange-600">Meu Carrinho</h2>
        <a href="{$PAG_CHEGADOS}" class="text-white hover:text-gray-500 text-2xl rounded-md border border-transparent bg-orange-600 py-2 px-4 cursor-pointer">
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
          {foreach from=$PRO item=P}
            <tr>
              <td class="flex pl-8 sm:items-center mt-5 mb-5">
                <img src="{$P.pro_img}" alt="{$P.pro_nome}" class="flex-none rounded-lg border border-gray-200 w-40 h-40">
              </td>
              <td class="mt-1 text-orange-500 text-2xl">{$P.pro_nome}</td>
              <td class="mt-1 text-gray-500 text-2xl">{$P.pro_qtd}</td>
              <td>{$P.pro_valor}</td>
              <td class="mt-1 text-gray-500 text-2xl">{$P.pro_subTotal}</td>
              <td>
                <form name="carrinho_dell" method="post" action="{$PAG_CARRINHO_ALTERAR}">
                  <input type="hidden" name="pro_id" value="{$P.pro_id}">
                  <input type="hidden" name="acao" value="del">
                  <button class="ml-4 font-medium text-orange-600 hover:text-orange-700 sm:ml-0 sm:mt-2">
                  <span>Remover</span>
                  </button>
                </form>
              </td>
            </tr>
          {/foreach}
          </tbody>
        </table>

        <!-- campos para tratar  do  frete -->
        <div id="dadosfrete">
          <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}" readonly>
          
          <input type="text" name="cep_frete" id="cep_frete" value="" class="w-full rounded-md border border-blue-gray-300 px-5 py-3 placeholder-blue-gray-400 shadow-sm focus:border-blue-500 focus:ring-1 focus:ring-blue-500 sm:max-w-xs text-2xl" placeholder="digite seu cep">
          
          <input type="hidden" name="frete_valor" id="frete_valor" value="0">

          <button class="btn btn-geral btn-block" id="buscar_frete"> Calcular Frete </button>
        </div>

        <form action="{$PAG_CONFIRMAR}" method="post" name="pedido_confirmar" id="pedido_confirmar">
          <section aria-labelledby="summary-heading" class="mt-auto sm:px-6 lg:px-8">
              <div class="bg-gray-50 p-6 sm:rounded-lg sm:p-8">
                <h2 id="summary-heading" class="sr-only">Order summary</h2>
                
                <div class="flow-root">
                  <dl class="-my-4 divide-y divide-gray-200 text-2xl">
                    <div class="flex items-center justify-between py-4">
                      {* <dt class="text-gray-600">Peso</dt> *}
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
                      <dd class="text-base font-medium text-gray-900 text-3xl">R$ {$TOTAL}</dd>
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

    <script>
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
  
  </script>