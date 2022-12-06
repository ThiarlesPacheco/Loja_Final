<?php
    Class Rotas
    {
        public static $pag;
        private static $pasta_controller = 'controller';
        private static $pasta_view = 'view';
        private static $pasta_ADM = 'adm';

        //RAIZ DO SERVIDOR LOCAL
        static function get_SiteHOME()
        {
            return Config::SITE_URL . '/' . Config::SITE_PASTA;
        }

        //RAIZ DA HOSPEDAGEM
        static function get_SiteRAIZ()
        {
            return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
        }

        //CAMINHO PARA PEGAR TEMPLATE DENTRO DA PASTA VIEW
        static function get_SiteTEMA()
        {
            return self::get_SiteHOME(). '/' .self::$pasta_view;
        }

         //PÁGINA CARRINHO
         static function pag_Carrinho()
         {
             return self::get_SiteHOME(). '/carrinho';
         }
         //PÁGINA LOGIN
         static function pag_ClienteLogin()
         {
             return self::get_SiteHOME(). '/login';
         }
         //PÁGINA LOGOFF
         static function pag_Logoff()
         {
             return self::get_SiteHOME(). '/logoff';
         }
         static function pag_CarrinhoAlterar()
         {
             return self::get_SiteHOME(). '/carrinho_alterar';
         }
         //PÁGINA CONTATO
         static function pag_Contato()
         {
             return self::get_SiteHOME(). '/contato';
         }
         //PÁGINA SOBRE NÓS
         static function pag_SobreNos()
         {
             return self::get_SiteHOME(). '/sobrenos';
         }
         //PÁGINA PRODUTOS
         static function pag_Produtos()
         {
             return self::get_SiteHOME(). '/produtos';
         }
         //PAGINA DA INFORMAÇÃO DO PRODUTO
         static function pag_ProdutosInfo()
         {
             return self::get_SiteHOME(). '/produtos_info';
         }
         //PAGINA MEU PERFIL / MINHA CONTA
         static function pag_MinhaConta()
         {
             return self::get_SiteHOME(). '/minhaconta';
         }
         //PAGINA DO CLIENTE
         static function pag_ClienteConta()
         {
             return self::get_SiteHOME(). '/minhaconta';
         }
         //PAGINA CADASTRAR CLIENTE
         static function pag_ClienteCadastro()
         {
             return self::get_SiteHOME(). '/cadastrarcliente';
         }
         //PAGINA RECUPERAR A SENHA
         static function pag_ClienteRecovery()
         {
             return self::get_SiteHOME(). '/clienterecovery';
         }
         //PAGINA CLIENTE SENHA
         static function pag_ClienteSenha()
         {
             return self::get_SiteHOME(). '/clientesenha';
         }
         //PAGINA CLIENTE DADOS
         static function pag_ClienteDados()
         {
             return self::get_SiteHOME(). '/clientedados';
         }
         //PAGINA DO CLIENTES PEDIDOS
         static function pag_ClientePedidos()
         {
             return self::get_SiteHOME(). '/clientes_pedido';
         }
         //PAGINA DO CLIENTES ITENS
         static function ClienteItens()
         {
             return self::get_SiteHOME(). '/cliente_itens';
         }
         //PAGINA PEDIDO CONFIRMAR
         static function pag_PedidoConfirmar()
         {
             return self::get_SiteHOME(). '/pedido_confirmar';
         }
         //PAGINA PEDIDO FINALIZAR
         static function pag_PedidoFinalizar()
         {
             return self::get_SiteHOME(). '/pedido_finalizar';
         }
         //PAGINA DE NOVOS PRODUTOS
         static function pag_Chegados()
         {
             return self::get_SiteHOME(). '/prod_chegados';
         }
          //PAGINA DE NOVOS PRODUTOS
         static function pag_NovosProdutos()
         {
             return self::get_SiteHOME(). '/chegados';
         }
         //ROTA PARA FAZER O UPLOAD DA IMAGEM
         static function get_ImagePasta()
         {
            return 'media/images/';
         }

         //=============================================
         // ROTA PARA ÁREA ADMINISTRATIVA
         static function get_SiteADM()
         {
            return self::get_SiteHOME(). '/' .self::$pasta_ADM;
         }

         static function pag_ProdutosADM()
         {
            return self::get_SiteADM(). '/adm_produtos';
         }

         static function pag_ProdutosNovoADM()
         {
            return self::get_SiteADM(). '/adm_produtos_novo';
         }

         static function pag_ProdutosEditarADM()
         {
            return self::get_SiteADM(). '/adm_produtos_editar';
         }

         static function pag_ProdutosDeletarADM()
         {
            return self::get_SiteADM(). '/adm_produtos_deletar';
         }

         static function pag_ProdutosImgADM()
         {
            return self::get_SiteADM(). '/adm_produtos_img';
         }

         static function pag_ClientesADM()
         {
            return self::get_SiteADM(). '/adm_clientes';
         }

         static function pag_ClientesEditarADM()
         {
            return self::get_SiteADM(). '/adm_clientes_editar';
         }

         static function pag_PedidosADM()
         {
            return self::get_SiteADM(). '/adm_pedidos';
         }

         static function pag_ItensADM()
         {
            return self::get_SiteADM(). '/adm_itens';
         }

         static function pag_CategoriasADM()
         {
            return self::get_SiteADM(). '/adm_categorias';
         }
         static function pag_LogoffADM()
         {
            return self::get_SiteADM(). '/adm_logoff';
         }

         //==============================================

         //ROTA PARA RECEBER A IMAGEM
         static function get_ImageURL()
         {
            return self::get_SiteHOME() . '/' . self::get_ImagePasta();
            //=> ex: http://localhost/Loja-Virtual/media/images/
         }
         //REDIMENSIONAR A IMAGEM E CHAMAR ROTA
         static function ImageLink($img, $largura, $altura)
         {
            $imagem = self::get_ImageURL() . "thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
            return $imagem;
         }

         //ROTA PARA O ARQUIVO DA HOME
         static function get_Pasta_Controller()
         {
            return self::$pasta_controller;
         }

         //MÉTODO PARA REDIRECIONAR
         static function Redirecionar($tempo, $pagina)
         {
            $url = '<meta http-equiv="refresh" content="'.$tempo.'; url='.$pagina.'">';
            echo $url;
         }

        // Uma classe statíca não precisa ser instaciada 
        static function get_pagina(){
            //Verificando se a url chamou
            if(isset($_GET['pag']))
            {
                $pagina = $_GET['pag'];

                self::$pag = explode('/', $pagina);

                // echo '<pre>';
                //     var_dump(self::$pag);
                // echo '<pre>';

                $pagina = 'controller/' .self::$pag[0].'.php';
                // $pagina = 'controller/' .$_GET['pag'].'.php';

                //Verificando se o arquivo existe
                if(file_exists($pagina))
                {
                    include $pagina;
                }
                else
                {
                    include 'erro.php';
                }
            }
            //Quando não encontrar a página, vai mandar para home.php
            else
            {
                include 'home.php';
            }
            
        }
    }
?>