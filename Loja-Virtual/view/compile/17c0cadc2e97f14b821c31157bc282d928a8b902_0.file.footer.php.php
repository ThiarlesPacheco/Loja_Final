<?php
/* Smarty version 3.1.31, created on 2022-10-19 04:13:32
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\templates\footer.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_634f5d4ccd4266_49430662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17c0cadc2e97f14b821c31157bc282d928a8b902' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\templates\\footer.php',
      1 => 1666145470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634f5d4ccd4266_49430662 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="footer" id="footer">

    <nav class="box-container">

        <div class="box" data-aos="fade-right">
            <h3>Nossas Filiais</h3>
            <ul>
                <li>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> São Paulo </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> China </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Santa Catarina </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Curitiba </a>
                </li>
            </ul>
        </div>

        <div class="box" data-aos="fade-down">
            <h3>Links Rapidos</h3>
            <ul>
                <li>
                    <a href="#"> <i class="fas fa-arrow-right"></i> Home </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-arrow-right"></i> Produtos </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-arrow-right"></i> Sobre-Nós </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-arrow-right"></i> Chegados </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-arrow-right"></i> Contato </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-arrow-right"></i> blogs </a>
                </li>
        </ul>
        </div>

        <div class="box" data-aos="fade-up">
            <h3>Contate - Nos</h3>
            <ul>
                <li>
                    <a href="#"> <i class="fas fa-phone"></i> +12-456-7890 </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-phone"></i> +11-222-3333 </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-envelope"></i> Mohhamedd@gmail.com </a>
                </li>
                <li>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Nonoai, Brasil - 40010441 </a>
                </li>
            </ul>
        </div>

        <div class="box" data-aos="fade-left">
            <h3>Contate - Nos</h3>
            <ul>
                <li>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                </li>
                <li>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                </li>
                <li>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                </li>
                <li>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                </li>
                <li>
                    <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
                </li>
            </ul>
        </div>

    </nav>
    <div class="credit"> Criado Por <span> Thiarles A. Pacheco</span> | Todos os Direitos Reservados </div>
</footer>

<!---teste---
<footer>
    <div class="credit"> Criado Por <span> Thiarles A. Pacheco</span> | Todos os Direitos Reservados </div>
</footer> --->

<!-- Fim Section Footer -->

<!-- Inicio JavaScript -->

<!-- criar carrosséis ou slides-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/https://unpkg.com/swiper@7/swiper-bundle.min.js"><?php echo '</script'; ?>
>

<!-- Customizar links em Js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/script.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/https://unpkg.com/aos@next/dist/aos.js"><?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
>
  AOS.init({
      delay: 300,
      duration: 500
  });
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
