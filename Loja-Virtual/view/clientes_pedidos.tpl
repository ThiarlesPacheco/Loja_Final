<section class="arrivals" id="arrivals">

<div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10">
    <h4 class="text-3xl font-medium text-orange-600">Meus Pedidos</h4>
</div>
    
<center>
{if $PEDIDOS_QUANTIDADES  > 0}
  
<table class="table-auto mt-10 text-2xl p-4 text-center">
          <thead>
            <tr>
              
              <th class="px-8 text-orange-500 text-2xl">Data</th>
              <th class="px-8 text-orange-500 text-2xl">Hora</th>
              <th class="px-8 text-orange-500 text-2xl">Ref</th>
              <th class="px-8 text-orange-500 text-2xl">Status</th>
              <th></th>
          
            </tr>
          </thead>
    <tbody>
    
    {foreach from=$PEDIDOS item=P}
    <tr>
        
        <td class="px-8 text-white text-2xl m-5">{$P.ped_data}</td>
        <td class="px-8 text-white text-2xl m-5">{$P.ped_hora}</td>
        <td class="px-8 text-white text-2xl m-5">{$P.ped_ref}</td>
      
        
        {if $P.ped_pag_status == 'NAO'} 
         <td class="px-8 text-red-600 text-2xl m-5"><span class="label label-danger">{$P.ped_pag_status}</span></td>
        {elseif $P.ped_pag_status == 'Pago'}
          <td class="px-8 text-green-600 text-2xl m-5"><span class="label label-success">{$P.ped_pag_status}</span></td>
        {else}
          <td class="px-8 text-white text-2xl m-5">{$P.ped_pag_status}</td>
        {/if}
         
            <form name="itens" method="post" action="{$PAG_ITENS}">
                
                <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                <td class="px-8 text-white text-2xl m-5"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
        
            </form>  
         
        
    </tr>
  {/foreach}

    </tbody>
</table>

{else}

  <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10">
    <h4 class="text-3xl font-medium text-orange-600">Você não fez nenhum Pedido no momento!</h4>
  </div>

{/if}
  </center>

 <!--  paginação inferior   -->  

</section>
<section id="pagincao" class="row">
 <center>
 {$PAGINACAO}
 </center>
 </section>