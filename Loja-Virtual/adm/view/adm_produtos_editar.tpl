<style>
label{
    color: #ef7819;
    font-size: 14pt;
    text-align: left;
    display: block;
}
</style>
<script src="{$GET_TEMA}/js/tinymce/tinymce.min.js"></script>
<section class="contact" id="contact">

    <h1 class="heading"> <span>Adicionar Novo</span> Produto </h1>

    <div class="row">
        <form name="frm_produto" method="post" action=""  enctype="multipart/form-data" class="flex flex-col">

        <div class="flex  justify-between gap-4">
            <div style="width: 50%;">
                <label for="pro_nome">Produto</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_nome" id="pro_nome" value="{$PRO.1.pro_nome}">
            </div>
            <div style="width: 50%;">
                <label for="pro_categoria">Categoria</label>
                <select name="pro_categoria" id="pro_categoria" class="box" required>

                    <option value="{$PRO.1.cat_id}"> {$PRO.1.cat_nome} </option>                           
                    <option value=""> Escolha</option>                           
                        {foreach from=$CATEGORIAS item=C}                    
                    <option value="{$C.cat_id}">{$C.cat_nome}</option>                                        
                        {/foreach}   
                               
                </select>
            </div>
        </div>
        
        <div class="flex  justify-between gap-4">
            <div style="width: 20%;">
                <label for="pro_cativo">Ativo</label>
                <select name="pro_ativo" id="pro_cativo" class="box" required>
              
                    <option value="{$PRO.1.pro_ativo}"> {$PRO.1.pro_ativo} </option>
                    <option value=""> Escolha </option>
                    <option value="NAO"> Não </option>
                    <option value="SIM"> Sim </option>
                
                </select>
            </div>
            <div style="width: 20%;">
                <label for="pro_modelo">Modelo</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_modelo" id="pro_modelo" value="{$PRO.1.pro_modelo}">
            </div>

            <div style="width: 20%;">
                <label for="pro_ref">Referência</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_ref" id="pro_ref" value="{$PRO.1.pro_ref}">
            </div>

            <div style="width: 20%;">
                <label for="pro_valor">Valor</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_valor" id="pro_valor" value="{$PRO.1.pro_valor}" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_estoque">Estoque</label>
                <input data-aos="zoom-in" type="text" class="box" name="pro_estoque" id="pro_estoque" value="{$PRO.1.pro_estoque}" required>
            </div>
        </div>


        <div class="flex  justify-between gap-4">
            <div style="width: 20%;">
                <label for="pro_peso">Peso</label>
                <input type="text" name="pro_peso" id="pro_peso" class="box" value="{$PRO.1.pro_peso}" required >
            </div>
            <div style="width: 20%;">
                <label for="pro_altura">Altura</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_altura" id="pro_altura" value="{$PRO.1.pro_altura}"  required>
            </div>

            <div style="width: 20%;">
                <label for="pro_largura">Largura</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_largura" id="pro_largura" value="{$PRO.1.pro_largura}" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_comprimento">Comprimento</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_comprimento" id="pro_comprimento" value="{$PRO.1.pro_comprimento}" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_img">Imagem Principal</label>
                <input data-aos="zoom-in" type="file" name="pro_img" class="box" id="pro_img">
                 <!--pega o nome da imagem atual -->
                 <input type="hidden" name="pro_img_atual" id="pro_img_atual" value="{$PRO.1.pro_img_atual}">
                 <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="{$PRO.1.pro_img_arquivo}">

                <div class="col-md-4">
                    <img src="{$PRO.1.pro_img}" class="thumbnail" alt="">  
                </div>
            </div>
        </div>

        <div class="flex  justify-between gap-4">
            <div style="width: 100%;">
                <label for="pro_desc">Descrição</label>
                <textarea data-aos="zoom-in" name="pro_desc" id="pro_desc" class="box" cols="30" rows="10" >{$PRO.1.pro_desc}</textarea>
                <script> 
                    tinymce.init({ selector:'textarea'  });
                </script> 
            </div>
        </div>

        <div class="flex  justify-between gap-4">
            <div style="width: 100%;">
                <label for="pro_slug">Slug</label>
                <input data-aos="zoom-in" type="text" class="box" readonly name="pro_slug" id="pro_slug" value="{$PRO.1.pro_slug}">
            </div>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Editar" class="btn">
        </div>
            <input type="hidden" name="pro_id" value="{$PRO.1.pro_id}">
        </form>

    </div>

</section>

        
        
        
        <!---bloco de apagar o produto -->
        <section class="row">

            {* <div class="col-md-4 text-right">
                <!--- botão que abre a opção de apagar -->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="glyphicon glyphicon-remove"></i> Apagar Produto</button> 

            </div> *}

            <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">            

                <form name="frm_apagar" method="post" action="">
                    <label class="text-center">Apagar este produto?</label>

                    <input type="radio" name="confirmar" value="SIM" required>
                    <!---botao que apagar o produto de uma vez -->
                    <button class="btn btn-danger " name="btn_apagar"><i class="glyphicon glyphicon-remove"></i> Apagar Produto </button> 




                    <input type="hidden" name="pro_id_apagar" value="{$PRO.1.pro_id}">
                    <input type="hidden" name="pro_apagar" value="SIM">
                    
                       <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="pro_img_arquivo" id="pro_img_arquivo" value="{$PRO.1.pro_img_arquivo}">

                </form>

            </div>

        </section>
        

 

