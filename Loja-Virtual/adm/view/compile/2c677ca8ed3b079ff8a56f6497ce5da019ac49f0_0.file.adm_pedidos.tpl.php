<?php
/* Smarty version 3.1.31, created on 2022-12-02 05:51:42
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\adm\view\adm_pedidos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6389bc9e9fa304_18547123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c677ca8ed3b079ff8a56f6497ce5da019ac49f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\adm\\view\\adm_pedidos.tpl',
      1 => 1669971099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6389bc9e9fa304_18547123 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PEDIDOS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
    <tr>
        
        <td class="px-8 text-white text-2xl m-5"><?php echo $_smarty_tpl->tpl_vars['P']->value['cli_nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['P']->value['cli_sobrenome'];?>
</td>
        <td class="px-8 text-white text-2xl m-5"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_data'];?>
</td>
        <td class="px-8 text-white text-2xl m-5"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_hora'];?>
</td>
        <td class="px-8 text-white text-2xl m-5"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_ref'];?>
</td>
      
        
        <?php if ($_smarty_tpl->tpl_vars['P']->value['ped_pag_status'] == 'NAO') {?> 
         <td class="px-8 text-red-600 text-2xl m-5"><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
        <?php } else { ?>
          <td class="px-8 text-green-600 text-2xl m-5"><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</span></td>
          <td class="px-8 text-white text-2xl m-5"><?php echo $_smarty_tpl->tpl_vars['P']->value['ped_pag_status'];?>
</td>
        <?php }?>
         
            <form name="itens" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_ITENS']->value;?>
">
                
                <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                <td class="px-8 text-white text-2xl m-5"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
        
            </form>  

            <form name="deletar" method="post" action="">
                <input type="hidden" name="cod_pedido" id="cod_pedido" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['ped_cod'];?>
">
                <td class="px-8 text-white text-2xl m-5"><button class="btn btn-danger" name="ped_apagar" value="ped_apagar"><i class="glyphicon glyphicon-remove"></i>Deletar</button></td>
            </form> 
         
        
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


    </tbody>
</table>

  </center>

 <!--  paginação inferior   -->  

</section>
<section id="pagincao" class="row">
 <center>
 <?php echo $_smarty_tpl->tpl_vars['PAGINACAO']->value;?>

 </center>
 </section>
<?php }
}
