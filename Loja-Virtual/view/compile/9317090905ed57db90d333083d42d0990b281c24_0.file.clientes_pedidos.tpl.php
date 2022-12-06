<?php
/* Smarty version 3.1.31, created on 2022-11-30 07:44:57
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\clientes_pedidos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6387342929d7f8_86568680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9317090905ed57db90d333083d42d0990b281c24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\clientes_pedidos.tpl',
      1 => 1669804874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6387342929d7f8_86568680 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="arrivals" id="arrivals">

<div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10">
    <h4 class="text-3xl font-medium text-orange-600">Meus Pedidos</h4>
</div>
    
<center>
<?php if ($_smarty_tpl->tpl_vars['PEDIDOS_QUANTIDADES']->value > 0) {?>
  
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
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
    <tr>
        
        <td class="px-8 text-white text-2xl m-5"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
        <td class="px-8 text-white text-2xl m-5"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
        <td class="px-8 text-white text-2xl m-5"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
      
        
        <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?> 
         <td class="px-8 text-red-600 text-2xl m-5"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
        <?php } elseif ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'Pago') {?>
          <td class="px-8 text-green-600 text-2xl m-5"><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
        <?php } else { ?>
          <td class="px-8 text-white text-2xl m-5"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
        <?php }?>
         
            <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                
                <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                <td class="px-8 text-white text-2xl m-5"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
        
            </form>  
         
        
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


    </tbody>
</table>

<?php } else { ?>

  <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 my-10">
    <h4 class="text-3xl font-medium text-orange-600">Você não fez nenhum Pedido no momento!</h4>
  </div>

<?php }?>
  </center>

 <!--  paginação inferior   -->  

</section>
<section id="pagincao" class="row">
 <center>
 <?php echo $_smarty_tpl->tpl_vars['PAGINACAO']->value;?>

 </center>
 </section><?php }
}
