<?php
/* Smarty version 3.1.31, created on 2022-12-02 19:40:58
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Escola_Hugo_Curso\Loja-Virtual\view\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_638a7efa0d9fd9_93979056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bb1a420167edd711d4cf5fde0b06d4ea95b4336' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Escola_Hugo_Curso\\Loja-Virtual\\view\\index.tpl',
      1 => 1670015948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638a7efa0d9fd9_93979056 (Smarty_Internal_Template $_smarty_tpl) {
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
    
<!-- Inicio Section Header  -->

<header>
    <div class="header">
        <a href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
/adm/login.php" class="logo nav-link"> <i class="fas fa-ghost"></i> logo </a>

        <nav class="navbar">
            <ul>
                <li>
                    <a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['GET_SITE_HOME']->value;?>
">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTO']->value;?>
">Produtos</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['SOBRE_NOS']->value;?>
">Sobre</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CHEGADOS']->value;?>
">Chegados</a>
                </li>
                <li>
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['MINHA_CONTA']->value;?>
">Minha Conta</a>
                </li>
                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a>
                <li>
                    <a class="nav-link" href="#blogs">Blogs</a>
                </li>
                
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            
            <?php if ($_smarty_tpl->tpl_vars['LOGADO']->value == true) {?>
                <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 gap-4">
                    <a  href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="fas fa-shopping-cart" style="text-decoration:none;"></a>
                    <h3 style="color: white; font-size: 14pt; "><?php echo $_smarty_tpl->tpl_vars['USER']->value;?>
</h3>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGOFF']->value;?>
" class="flex items-center justify-center gap-2 text-white hover:text-red-700 rounded-md border border-transparent bg-red-600 py-2 px-2 cursor-pointer sm:text-2lx">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>

                    Sair
                    <!-- Heroicon name: outline/x-mark -->
                </a>
                </div>
                
            <?php } else { ?>
                <a  href="<?php echo $_smarty_tpl->tpl_vars['LOGIN']->value;?>
" class="fas fa-user"></a>
                <a  href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
" class="fas fa-shopping-cart" style="text-decoration:none;"></a>
            <?php }?>
        </div>

        <form class="search-form" name="search">
            <input type="search" placeholder="search here..." id="input-box">
            <label for="input-box" class="fas fa-search"></label>
        </form>
    </div>
</header>

<!-- Modal -->
<div class="fade">
    <div class="modal">
        <div id="modal_header">
            <h2>Login</h2>
        </div>
        <div id="modal_main">
            <form method="post" id="form-login">
                <div class="form_group">
                    <label for="">Email/CPF</label>
                    <input type="email" name="email" id="email" placeholder="Digite o e-mail ou cpf" required>
                </div>
                <div class="form_group">
                    <label for="">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite a senha">
                </div>
                <div id="msg-perfil">
						<!--Identificador de mansagem via Escript-->
				</div>
                <div class="form_group button_close">      
						<button type="submit" class="btn btn-sub">Login</button>
                        <a class="btn btn-sub" onclick="modalClose()">Fechar</a>
				</div>
            </form>
        </div>
        <div id="modal_footer">
            <!-- <button>Close</button> -->
        </div>
    </div>
</div>

<!--SCRIPT MODAL PARA LOGIN-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/js/modalLogin.js"><?php echo '</script'; ?>
>

<!--SEÇÃO PRINCIPLA-->
<section class="home" id="home">
    <div class="content" data-aos="fade-right">

    </div>
</section>
<main class="conteudo" id="conteudo" style="margin-top: 78px;">



    
        <?php 
            Rotas::get_pagina();
        ?>
    


</main>


<!--FIM DA SEÇÃO PRINCIPLA-->

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
    <div class="credit"> Criado Por <span> Thiarles A. Pacheco</span> | Todos os Direitos Reservados - Data: <?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
</div>
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
