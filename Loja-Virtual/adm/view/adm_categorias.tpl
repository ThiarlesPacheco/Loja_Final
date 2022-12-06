
<section class="contact" id="contact">

<div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10">
<h2 class="text-4xl font-medium text-orange-600">Gerenciar Categorias</h2>
</div>

    <div class="row">
        <form name="categoriainsere" method="post" action="">
            
            <div class="col-md-4">
                <input data-aos="zoom-in" type="text" name="cate_nome" class="box" required>  
            </div>

            <div>
                <button class="btn btn-success" name="cate_nova" value="cate_nova"> Inserir nova </button>
            </div>
            <div class="col-md-4"></div>
        </form>
    </div>

    
    <center>
    <div class="row">
    <table class="table table-bordered" style="width: 90%">
        
      
        {foreach from=$CATEGORIAS item=C}
            <form name="categorias_editar" method="post" action="">
               
                <tr>
                    <td class="mt-1 text-black-500 text-2xl">
                         <input data-aos="zoom-in" type="text" name="cate_nome" value="{$C.cat_nome}" class="box" required> 
                          <input data-aos="zoom-in" type="hidden" name="cate_id" value="{$C.cat_id}" class="box">
                    </td>
                       
                    <td>
                        <button class="btn btn-success" name="cate_editar" value="cate_editar">Editar</button>
                    </td>
                   
                    <td>
                        <button class="btn btn-danger" name="cate_apagar" value="cate_apagar">Apagar</button>
                    </td>


                </tr>        

            </form>
            
        {/foreach}
        
    </table>
    </div>
    </center>

</section>
<hr>
