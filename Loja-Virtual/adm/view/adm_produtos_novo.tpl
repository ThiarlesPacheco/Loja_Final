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
                <input data-aos="zoom-in" type="text"  class="box" name="pro_nome" id="pro_nome" required>
            </div>
            <div style="width: 50%;">
                <label for="pro_categoria">Categoria</label>
                <select name="pro_categoria" id="pro_categoria" class="box">
              
                    <option value="teste"> Escolha </option>                           
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
              
                    <option value=""> Escolha </option>
                    <option value="NAO"> Não </option>
                    <option value="SIM"> Sim </option>
                
                </select>
            </div>
            <div style="width: 20%;">
                <label for="pro_modelo">Modelo</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_modelo" id="pro_modelo" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_ref">Referência</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_ref" id="pro_ref">
            </div>

            <div style="width: 20%;">
                <label for="pro_valor">Valor</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_valor" id="pro_valor" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_estoque">Estoque</label>
                <input data-aos="zoom-in" type="text" class="box" name="pro_estoque" id="pro_estoque" required>
            </div>
        </div>


        <div class="flex  justify-between gap-4">
            <div style="width: 20%;">
                <label for="pro_peso">Peso</label>
                <input type="text" name="pro_peso" id="pro_peso" class="box" required >
            </div>
            <div style="width: 20%;">
                <label for="pro_altura">Altura</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_altura" id="pro_altura"  required>
            </div>

            <div style="width: 20%;">
                <label for="pro_largura">Largura</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_largura" id="pro_largura" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_comprimento">Comprimento</label>
                <input data-aos="zoom-in" type="text"  class="box" name="pro_comprimento" id="pro_comprimento" required>
            </div>

            <div style="width: 20%;">
                <label for="pro_img">Imagem Principal</label>
                <input data-aos="zoom-in" type="file" name="pro_img" class="box" id="pro_img" required>
            </div>
        </div>

        <div class="flex  justify-between gap-4">
            <div style="width: 100%;">
                <label for="pro_desc">Descrição</label>
                <textarea data-aos="zoom-in" name="pro_desc" id="pro_desc" class="box" cols="30" rows="10" ></textarea>
                <script> 
                    tinymce.init({ selector:'textarea'  });
                </script> 
            </div>
        </div>

        <div class="flex  justify-between gap-4">
            <div style="width: 100%;">
                <label for="pro_slug">Slug</label>
                <input data-aos="zoom-in" type="text" class="box" readonly name="pro_slug" id="pro_slug">
            </div>
        </div>
        
        <div>
            <input data-aos="zoom-in" type="submit" value="Gravar" class="btn">
        </div>

        </form>

    </div>

</section>
