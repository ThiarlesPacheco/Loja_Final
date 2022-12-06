<?php
/* Smarty version 3.1.31, created on 2022-10-28 04:00:48
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_635b37d0278a09_94852642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4634ceabd8ae78d289eee5a16b3cd8ea83b43f42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\home.tpl',
      1 => 1666922444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635b37d0278a09_94852642 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box" style="background: url(<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/Img_chuteira/home-6.jpeg);">
                <div class="content">
                    <h3>Viva o Futeboll</h3>
                    <p>Descontos Especiais</p>
                    <div class="button">
                        <a href="#" class="btn">Compre Agora</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box" style="background: url(<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/Img_chuteira/home-15.jpg);">
                <div class="content">
                    <h3>Até 30% de Desconto</h3>
                    <p>Em Todos os Items</p>
                    <div class="button">
                        <a href="#" class="btn">Compre Agora</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box" style="background: url(<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/Img_chuteira/home-12.webp);">
                <div class="content">
                    <h3>Ofertas Limitadas</h3>
                    <p>Não Perca</p>
                    <div class="button">
                        <a href="#" class="btn">Compre Agora</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section><?php }
}
