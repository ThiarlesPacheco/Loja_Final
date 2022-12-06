<main class="mx-auto max-w-7xl sm:px-6 sm:pt-16 lg:px-8 ">
      <div class="flex min-h-full items-stretch justify-center text-center sm:items-center sm:px-6 lg:px-8 mb-10 mt-10">

      <div class="relative flex w-full flex-col overflow-hidden bg-white pt-6 pb-8 sm:rounded-lg sm:pb-6 lg:py-8">

      <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-medium text-orange-600">Gereciar Produtos</h2>
        <div class="col-md-4 text-right">
        <a href="{$PAG_PRODUTO_NOVO}" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Novo Produto</a>
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
          {foreach from=$PRO item=P}
            <tr>
              <td class="flex pl-8 sm:items-center mt-5 mb-5">
                <img src="{$P.pro_img}" alt="{$P.pro_nome}" class="flex-none rounded-lg border border-gray-200 w-40 h-40">
              </td>
              <td class="mt-1 text-orange-500 text-2xl">{$P.pro_nome}</td>
              <td class="mt-1 text-gray-500 text-2xl">{$P.cat_nome}</td>
              <td>{$P.pro_valor}</td>
              {* <td class="mt-1 text-gray-500 text-2xl">{$P.pro_subTotal}</td> *}
              <td>
                <form name="proeditar" method="post" action="{$PAG_PRODUTO_EDITAR}">
                  <input type="hidden" name="pro_id" value="{$P.pro_id}">
                  <button class="ml-4 font-medium text-orange-600 hover:text-orange-700 sm:ml-0 sm:mt-2">
                  <span>Editar</span>
                  </button>
                </form>
                <form name="proimg" method="post" action="{$PAG_PRODUTO_IMG}">
                  <input type="hidden" name="pro_id" value="{$P.pro_id}">
                  <input type="hidden" name="pro_nome" value="{$P.pro_nome}">
                  <button class="ml-4 font-medium text-orange-600 hover:text-orange-700 sm:ml-0 sm:mt-2">
                  <span>Add + 3 imagens</span>
                  </button>
                </form>
              </td>
            </tr>
          {/foreach}
          </tbody>
        </table>

      </div>
    </main>

  
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    {$PAGINACAO}
    </center>
    </section>
