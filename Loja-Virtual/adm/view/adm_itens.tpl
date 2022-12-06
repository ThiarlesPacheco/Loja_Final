<div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10">
     <h4 class="text-3xl font-medium text-orange-600">Itens Do Cliente</h4>
 </div>

<!-- informações sobre o pedido -->
<section class="arrivals" id="arrivals">
<section class="row bg-green-600">
    
    <center>
    <table class="table table-bordered text-2xl" style="width: 80%">
        <tr class="bg-success">
            
            <td class="px-8 text-white text-2xl m-5"><b>Data:</b> {$ITENS.1.ped_data}</td>
            
            <td class="px-8 text-white text-2xl m-5"><b>Hora:</b> {$ITENS.1.ped_hora}</td>
            
            <td class="px-8 text-white text-2xl m-5"><b>Ref:</b> {$ITENS.1.ped_ref}</td>
            
            <td class="px-8 text-white text-2xl m-5"><b>Status:</b> {$ITENS.1.ped_pag_status}</td>
            
        </tr>  
        
        
    </table>
    </center>
    
</section>


<!-- listagem dos itens -->
<section class="row bg-green-700" id="listaitens">
    
    <center>
    <table class="table table-bordered text-2xl" style="width: 80%">
        
        <tr class="text-success bg-success">
            <td></td>
            <td class="px-8 text-black-600 text-3xl m-5">Item</td>
            <td class="px-8 text-black-600 text-3xl m-5">Valor Uni</td>
            <td class="px-8 text-black-600 text-3xl m-5">X</td>
            <td class="px-8 text-black-600 text-3xl m-5">Sub</td>
        </tr>
        
        {foreach from=$ITENS item=P}
        <tr>
            
            <td><img src="{$P.item_img}" alt=""> </td>
            <td class="px-8 text-white text-2xl m-5"> {$P.item_nome}</td>
            <td class="px-8 text-white text-2xl m-5"> {$P.item_valor}</td>
            <td class="px-8 text-white text-2xl m-5"> {$P.item_qtd}</td>
            <td class="px-8 text-white text-2xl m-5"> {$P.item_sub}</td>
            
        </tr>
        
        {/foreach}
        
        
    </table>
    </center>
    
    
    
</section>
        
        
        <section class="row bg-green-600" id="resumo">

            <center>
                <table class="table table-bordered text-2xl" style="width: 80%">
                    <tr>

                        <td class="text-danger px-8 text-white text-2xl m-5"> <b>Frete:</b> {$ITENS.1.ped_frete_valor}</td>

                        <td class="text-danger px-8 text-white text-2xl m-5"> <b>Total:</b> {$TOTAL}</td>

                        <td class="text-danger px-8 text-white text-2xl m-5"> <b>Final:</b> {$ITENS.1.ped_frete_valor+$TOTAL}</td>

                    </tr>  


                </table>
             
                        
        </section>  
                        
                        
              {if $ITENS.1.ped_pag_status =='NAO'}          
                         <!--  modos de pagamento e outras informações --> 
        <section class="row bg-orange-600">
            <h3 class="text-center px-8 text-white text-2xl m-5"> Formas de pagamento </h3>     
            
            <div class="col-md-4">
              
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
               
                BOTÃO DE PAGAMENTO
                
                
                   <img src="{$TEMA}/images/logo-pagseguro.png"  alt=""> 
                   <script type="text/javascript" src=""></script>
                
            </div>
            <div class="col-md-4">
                
            </div>
         
            
        </section>

 {/if}
 </section>