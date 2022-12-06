<?php
/* Smarty version 3.1.31, created on 2022-10-19 04:09:20
  from "C:\xampp\htdocs\Escola_Hugo_Curso\Loja-Virtual\view\templates\header.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_634f5c502510f9_25126073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81062d5340717c4a45fd34d0c01948d6c9b914dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Escola_Hugo_Curso\\Loja-Virtual\\view\\templates\\header.php',
      1 => 1666145128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634f5c502510f9_25126073 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php 

';
echo '?>';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsivo E-Commerce</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/vendors/css/normalize.css">

    <!-- Importação do link de animar a pagina na rolagem-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/https://unpkg.com/aos@next/dist/aos.css" />

    <!-- link slides deslizante -->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome cdn link  -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Style Css Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- Style Css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/style.min.css">

    <!-- Style Modal Css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/modal.css">


   

</head>
<body>
    
<!-- Inicio Section Header  -->

<header>
    <div class="header">
        <a href="#home" class="logo nav-link"> <i class="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/fas fa-ghost"></i> logo </a>

        <nav class="navbar">
            <ul>
                <li>
                    <a class="nav-link active" href="#home">home</a>
                </li>
                <li>
                    <a class="nav-link" href="#products">Produtos</a>
                </li>
                <li>
                    <a class="nav-link" href="#about">Sobre-Nós</a>
                </li>
                <li>
                    <a class="nav-link" href="#arrivals">Chegados</a>
                </li>
                    <a class="nav-link" href="#contact">Contato</a>
                <li>
                    <a class="nav-link" href="#blogs">Blogs</a>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <a  href="#" class="fas fa-shopping-cart" style="text-decoration:none;"></a>
            <a  class="fas fa-user" onclick="modalLogin()"></a>
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
><?php }
}
