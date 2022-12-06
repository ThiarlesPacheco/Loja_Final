<?php
/* Smarty version 3.1.31, created on 2022-12-02 19:41:04
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Escola_Hugo_Curso\Loja-Virtual\view\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638a7f007175c8_60683900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25d40d140713ffd1e9be1dcda0c719ac5450092a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Escola_Hugo_Curso\\Loja-Virtual\\view\\home.tpl',
      1 => 1666922444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a7f007175c8_60683900 (Smarty_Internal_Template $_smarty_tpl) {
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
