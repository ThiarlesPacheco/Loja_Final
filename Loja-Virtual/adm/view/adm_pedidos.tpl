<style>
label{
    color: #ef7819;
    font-size: 14pt;
    text-align: center;
    display: block;
}
</style>
<section class="arrivals" id="arrivals">

<div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10">
    <h4 class="text-3xl font-medium text-orange-600">Gerenciar Pedido</h4>
</div>
    
<center>

<div class="row">
<form name="buscarrefcod" method="post" action="">  

    <div >
        <label for="pro_desc">Buscar por Referencia</label>
        <input data-aos="zoom-in" type="text" name="txt_ref" class="box p-5 text-2xl" required>   
    </div>
    <div >
        <button class="btn btn-success"> Buscar </button>   
    </div>

</form>
</div>


  
<table class="table-auto mt-10 text-2xl p-4 text-center">
          <thead>
            <tr>
              
              <th class="px-8 text-orange-500 text-2xl">Cliente</th>
              <th class="px-8 text-orange-500 text-2xl">Data</th>
              <th class="px-8 text-orange-500 text-2xl">Hora</th>
              <th class="px-8 text-orange-500 text-2xl">Ref</th>
              <th class="px-8 text-orange-500 text-2xl">Status</th>
              <th></th>
              <th></th>
             
          
            </tr>
          </thead>
    <tbody>
    
    {foreach from=$PEDIDOS item=P}
    <tr>
        
        <td class="px-8 text-white text-2xl m-5">{$P.cli_nome} {$P.cli_sobrenome}</td>
        <td class="px-8 text-white text-2xl m-5">{$P.ped_data}</td>
        <td class="px-8 text-white text-2xl m-5">{$P.ped_hora}</td>
        <td class="px-8 text-white text-2xl m-5">{$P.ped_ref}</td>
      
        
        {if $P.ped_pag_status == 'NAO'} 
         <td class="px-8 text-red-600 text-2xl m-5"><span class="label label-danger">{$P.ped_pag_status}</span></td>
        {else}
          <td class="px-8 text-green-600 text-2xl m-5"><span class="label label-success">{$P.ped_pag_status}</span></td>
          <td class="px-8 text-white text-2xl m-5">{$P.ped_pag_status}</td>
        {/if}
         
            <form name="itens" method="post" action="{$PAG_ITENS}">
                
                <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                <td class="px-8 text-white text-2xl m-5"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
        
            </form>  

            <form name="deletar" method="post" action="">
                <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                <td class="px-8 text-white text-2xl m-5"><button class="btn btn-danger" name="ped_apagar" value="ped_apagar"><i class="glyphicon glyphicon-remove"></i>Deletar</button></td>
            </form> 
         
        
    </tr>
  {/foreach}

    </tbody>
</table>

  </center>

 <!--  paginação inferior   -->  

</section>
<section id="pagincao" class="row">
 <center>
 {$PAGINACAO}
 </center>
 </section>
