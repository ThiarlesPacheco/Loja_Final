<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$TITULO_SITE}</title>

    <link rel="stylesheet" href="{$GET_TEMA}/vendors/css/normalize.css">
    <link rel="stylesheet" href="{$GET_TEMA}/css/tailwind.css">

    <!-- Importação do link de animar a pagina na rolagem-->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- link slides deslizante -->

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Style Css Bootstrap -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- Style Css -->
    <link rel="stylesheet" href="{$GET_TEMA}/css/style.min.css">

    <!-- Style Modal Css -->
    <link rel="stylesheet" href="{$GET_TEMA}/css/modal.css">

    <script src="{$GET_TEMA}/js/jquery.js"></script>


   

</head>
<body>
    
<!-- Inicio Section Header  -->

<header>
    <div class="header">
        <a href="{$GET_SITE_HOME}/adm/login.php" class="logo nav-link"> <i class="fas fa-ghost"></i> logo </a>

        <nav class="navbar">
            <ul>
                <li>
                    <a class="nav-link active" href="{$GET_SITE_HOME}">Home</a>
                </li>
                <li>
                    <a class="nav-link" href="{$PAG_PRODUTO}">Produtos</a>
                </li>
                <li>
                    <a class="nav-link" href="{$SOBRE_NOS}">Sobre</a>
                </li>
                <li>
                    <a class="nav-link" href="{$PAG_CHEGADOS}">Chegados</a>
                </li>
                <li>
                    <a class="nav-link" href="{$MINHA_CONTA}">Minha Conta</a>
                </li>
                    <a class="nav-link" href="{$PAG_CONTATO}">Contato</a>
                <li>
                    <a class="nav-link" href="#blogs">Blogs</a>
                </li>
                
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            {* <div id="search-btn" class="fas fa-search"></div> *}
            {if $LOGADO == true}
                <div class="flex items-center justify-center px-4 sm:px-6 lg:px-8 gap-4">
                    <a  href="{$PAG_CARRINHO}" class="fas fa-shopping-cart" style="text-decoration:none;"></a>
                    <h3 style="color: white; font-size: 14pt; ">{$USER}</h3>

                    <a href="{$PAG_LOGOFF}" class="flex items-center justify-center gap-2 text-white hover:text-red-700 rounded-md border border-transparent bg-red-600 py-2 px-2 cursor-pointer sm:text-2lx">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>

                    Sair
                    <!-- Heroicon name: outline/x-mark -->
                </a>
                </div>
                
            {else}
                <a  href="{$LOGIN}" class="fas fa-user"></a>
                <a  href="{$PAG_CARRINHO}" class="fas fa-shopping-cart" style="text-decoration:none;"></a>
            {/if}
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
<script src="{$GET_TEMA}/js/modalLogin.js"></script>

<!--SEÇÃO PRINCIPLA-->
<section class="home" id="home">
    <div class="content" data-aos="fade-right">

    </div>
</section>
<main class="conteudo" id="conteudo" style="margin-top: 78px;">



    
        {php}
            Rotas::get_pagina();
        {/php}
    


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
    <div class="credit"> Criado Por <span> Thiarles A. Pacheco</span> | Todos os Direitos Reservados - Data: {$DATA}</div>
</footer>

<!---teste---
<footer>
    <div class="credit"> Criado Por <span> Thiarles A. Pacheco</span> | Todos os Direitos Reservados </div>
</footer> --->

<!-- Fim Section Footer -->

<!-- Inicio JavaScript -->

<!-- criar carrosséis ou slides-->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- Customizar links em Js-->
<script src="{$GET_TEMA}/js/script.min.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
      delay: 300,
      duration: 500
  });
</script>

</body>
</html>