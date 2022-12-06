<?php
/* Smarty version 3.1.31, created on 2022-11-30 03:30:42
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\cliente_itens.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6386f892bc86a7_25926901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbff677aa9d4d0514264f39ee2fa5862c26a71a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\cliente_itens.tpl',
      1 => 1669789836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6386f892bc86a7_25926901 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10">
     <h4 class="text-3xl font-medium text-orange-600">Dados do pedido</h4>
 </div>

<!-- informações sobre o pedido -->
<section class="arrivals" id="arrivals">
<section class="row bg-green-600">
    
    <center>
    <table class="table table-bordered text-2xl" style="width: 80%">
        <tr class="bg-success">
            
            <td class="px-8 text-white text-2xl m-5"><b>Data:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_data'];?>
</td>
            
            <td class="px-8 text-white text-2xl m-5"><b>Hora:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_hora'];?>
</td>
            
            <td class="px-8 text-white text-2xl m-5"><b>Ref:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_ref'];?>
</td>
            
            <td class="px-8 text-white text-2xl m-5"><b>Status:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'];?>
</td>
            
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
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ITENS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
        <tr>
            
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['item_img'];?>
" alt=""> </td>
            <td class="px-8 text-white text-2xl m-5"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_nome'];?>
</td>
            <td class="px-8 text-white text-2xl m-5"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_valor'];?>
</td>
            <td class="px-8 text-white text-2xl m-5"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_qtd'];?>
</td>
            <td class="px-8 text-white text-2xl m-5"> <?php echo $_smarty_tpl->tpl_vars['P']->value['item_sub'];?>
</td>
            
        </tr>
        
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        
        
    </table>
    </center>
    
    
    
</section>
        
        
        <section class="row bg-green-600" id="resumo">

            <center>
                <table class="table table-bordered text-2xl" style="width: 80%">
                    <tr>

                        <td class="text-danger px-8 text-white text-2xl m-5"> <b>Frete:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor'];?>
</td>

                        <td class="text-danger px-8 text-white text-2xl m-5"> <b>Total:</b> <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                        <td class="text-danger px-8 text-white text-2xl m-5"> <b>Final:</b> <?php echo $_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_frete_valor']+$_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>

                    </tr>  


                </table>
             
                        
        </section>  
                        
                        
              <?php if ($_smarty_tpl->tpl_vars['ITENS']->value[1]['ped_pag_status'] == 'NAO') {?>          
                         <!--  modos de pagamento e outras informações --> 
        <section class="row bg-orange-600">
            <h3 class="text-center px-8 text-white text-2xl m-5"> Formas de pagamento </h3>     
            
            <div class="col-md-4">
              
            </div>
            <!-- botao de pagamento  -->
            <div class="col-md-4">
               
                BOTÃO DE PAGAMENTO
                
                
                   <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png"  alt=""> 
                   <?php echo '<script'; ?>
 type="text/javascript" src=""><?php echo '</script'; ?>
>
                
            </div>
            <div class="col-md-4">
                
            </div>
         
            
        </section>

 <?php }?>
 </section><?php }
}
