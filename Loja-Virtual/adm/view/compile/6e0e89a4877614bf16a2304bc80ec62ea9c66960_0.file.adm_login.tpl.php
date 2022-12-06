<?php
/* Smarty version 3.1.31, created on 2022-12-02 18:13:02
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\adm\view\adm_login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638a6a5e9349e3_94235772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e0e89a4877614bf16a2304bc80ec62ea9c66960' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\adm\\view\\adm_login.tpl',
      1 => 1670015569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a6a5e9349e3_94235772 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendors/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/tailwind.css">

    <!-- Importação do link de animar a pagina na rolagem-->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- link slides deslizante -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Style Css Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- Style Css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.min.css">

    <!-- Style Modal Css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/modal.css">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/jquery.js"><?php echo '</script'; ?>
>


   

</head>
<body>
    <section class="contact" id="contact my-10">
    
        <h1 class="heading"> <span>Área de acesso do</span> Administrador </h1>
    
        <div class="row">
    
            <div class="map">
            <main>
            <div class="relative px-6 lg:px-8">
              <div class="mx-auto max-w-3xl pt-20 pb-32 sm:pt-48 sm:pb-40">
                <div>
                  <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div class="relative overflow-hidden rounded-full py-1.5 px-4  leading-6 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    
                    </div>
                  </div>
                  <div>
                    <h1 class="font-bold tracking-tight sm:text-center sm:text-6xl text-white">Login do Administrador</h1>
                    <p class="mt-6 leading-8 text-gray-600 sm:text-center sm:text-2xl">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
    
    
                    <div class="mt-8 flex gap-x-4 sm:justify-center">
                      
    
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
            </div>
    
            <form name="login" method="post" action="">
                <h3 data-aos="zoom-in">Login</h3>
                <input data-aos="zoom-in" type="email" placeholder="Digite seu Email" class="box" name="txt_email" required>
                <input data-aos="zoom-in" type="password" placeholder="Digite sua Senha" class="box" name="txt_senha" required>
                <input data-aos="zoom-in" name="txt_logar" type="submit" value="Entrar" class="btn">
            </form>
    
        </div>
    
    </section>

<!-- Inicio Section Footer -->
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
<div class="credit"> Criado Por <span> Thiarles A. Pacheco</span> | Todos os Direitos Reservados - Data:</div>
</footer>

<!---teste---
<footer>
<div class="credit"> Criado Por <span> Thiarles A. Pacheco</span> | Todos os Direitos Reservados </div>
</footer> --->

<!-- Fim Section Footer -->

<!-- Inicio JavaScript -->

<!-- criar carrosséis ou slides-->

<?php echo '<script'; ?>
 src="https://unpkg.com/swiper@7/swiper-bundle.min.js"><?php echo '</script'; ?>
>

<!-- Customizar links em Js-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/script.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://unpkg.com/aos@next/dist/aos.js"><?php echo '</script'; ?>
>
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
