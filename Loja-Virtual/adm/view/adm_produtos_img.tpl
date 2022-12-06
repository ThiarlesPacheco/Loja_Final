
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

    <h1 class="heading"> <span>Adicionar Mais</span> 3 Imagens do Produto </h1>

    <div class="row">

        <!--- formulario de envio da foto -->
        <form name="nova" method="post" action=""  enctype="multipart/form-data" class="flex flex-col">
            <div class="col-md-4">
                <input data-aos="zoom-in" type="hidden" name="pro_id" value="{$PRO}">
                <input data-aos="zoom-in" type="file" name="pro_img"  class="box"  required>
            </div>
            <div>
                <input data-aos="zoom-in" type="submit" value="Enviar" class="btn">
            </div>
        </form> 

    </div>

</section>

<!-- listando as imagens que existem no produto-->
<section class="contact" id="contact">
    <div class="row">
        <!-- formulario de apagar a foto ou varias -->
        <form name="deletar" method="post" action="" class="flex flex-col">
    
            <ul style="list-style: none">
                    {foreach from=$IMAGES item=I}
                        <li class="col-md-3 ">
                            <img src="{$I.img_nome}" alt="" class="thumbnail">

                            <label>Apagar?</label> 
                            <input data-aos="zoom-in" type="checkbox" class="box" name="fotos_apagar[]" value="{$I.img_arquivo}">   
                                        
                        </li>
                    {/foreach}
                    
                    <input type="hidden" name="pro_id" value="{$I.img_pro_id}">
            </ul>

            <!--- botao de apagar fotos -->
                <section class="col-md-12 text-center" id="apagar">
                    <div>
                        <input data-aos="zoom-in" type="submit" value="Apagar Marcadas" class="btn">
                    </div>
                </section>
        </form>
    </div>
</section>


            



