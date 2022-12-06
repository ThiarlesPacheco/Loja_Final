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
          {foreach from=$CLIENTES item=C}
            <tr>
              <td class="flex pl-8 sm:items-center mt-5 mb-5">
                <a href="{$PAG_PEDIDOS}/{$C.cli_id} " class="btn btn-success">Pedidos</a>
              </td>
              <td class="mt-1 text-orange-500 text-2xl">{$C.cli_nome} {$C.cli_sobrenome}</td>
              <td class="mt-1 text-gray-500 text-2xl">{$C.cli_email}</td>
              <td class="mt-1 text-gray-500 text-2xl">{$C.cli_fone}</td>
              <td class="mt-1 text-gray-500 text-2xl">{$C.cli_data_cad}</td>
              <td class="mt-1 text-orange-500 text-2xl">
                <a href="{$PAG_EDITAR}/{$C.cli_id}" class="btn btn-success"> Ver </a>
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
    {* {$PAGINACAO} *}
    </center>
    </section>