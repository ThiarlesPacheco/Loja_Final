<?php
/* Smarty version 3.1.31, created on 2022-12-02 19:41:07
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Escola_Hugo_Curso\Loja-Virtual\view\produto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638a7f036247f7_76921232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73049de4983143bcbc4e368cc6f42fa124c11694' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Escola_Hugo_Curso\\Loja-Virtual\\view\\produto.tpl',
      1 => 1667441926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a7f036247f7_76921232 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Inicio Section Nossos Produtos -->

<section class="products" id="products">

    <h1 class="heading"> Nosso <span>Produtos</span> </h1>

    <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?>
        <h4 class="alert alert-danger">Nenhum produto encontrado</h4>
    <?php }?>

    <div class="swiper products-slider" data-aos="zoom-in">

       
      
        <div class="swiper-wrapper">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="fas fa-shopping-cart"></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="fas fa-eye"></a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
">
                    </div>
                    <div class="content">
                        <h3><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h3>
                        <div class="price">R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 <span>$595.99</span> </div>
                    </div>
                </div>
           <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


        </div>

    </div>

    <div class="box-container">
        <?php echo $_smarty_tpl->tpl_vars['PAGINACAO']->value;?>

    </div>

</section>

<!-- Fim Section Nossos Produtos --><?php }
}
