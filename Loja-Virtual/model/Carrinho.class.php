<?php

    class Carrinho
    {
        private $total_valor, $total_peso, $itens = array();

        function GetCarrinho($sessao=NULL)
        {
            $i = 1; $sub = 1.00; $peso = 0;
            

            foreach ($_SESSION['PRO'] as $lista) {
                $sub = ($lista['VALOR_US'] * $lista['QTD']);
                //SOMAR O VALOR TOTAL
                $this->total_valor += $sub;

                $peso = $lista['PESO'] * $lista['QTD'];
                $this->total_peso += $peso;

                //RECUPERAR OS ITENS
                $this->itens[$i] = array(

                    'pro_id' => $lista['ID'],
                    'pro_nome' => $lista['NOME'],
                    'pro_valor' => $lista['VALOR'], 
                    'pro_valor_us' => $lista['VALOR_US'], 
                    'pro_peso' => $lista['PESO'],
                    'pro_qtd' => $lista['QTD'],
                    'pro_img' => $lista['IMG'],
                    'pro_link' => $lista['LINK'],
                    'pro_subTotal' => Sistema::MoedaBR($sub),
                    'pro_subTotal_us' => $sub,

                );
             $i++;
            }

            //FAZER A VERIFICAÇÃO SE O NÚMERO DE ITEM É MAIOR DO QUE O ZERO
            if(@count($this->itens) > 0)
            {
                return $this->itens;
            }
            else
            {
                echo '<h4 > Não há produto no carrinho! </h4>';  
            }
        }

        //RECEBE O QUE VIER DENTRO DA VARIÁVEL TOTAL VALOR
        function GetTotal()
        {
            return $this->total_valor;
        }
        //RECEBE O QUE VIER DENTRO DA VARIÁVEL TOTAL PESO
        function GetPeso()
        {
            return $this->total_peso;
        }
        //Verifica se o produto existe para acrescentar a quantidade 
        function CarrinhoADD($id)
        {
            $produtos = new Produtos();
            $produtos->GetProdutosID($id);

            foreach ($produtos->GetItens() as $pro) {
                $ID = $pro['pro_id'];
                $NOME = $pro['pro_nome'];
                $VALOR_US = $pro['pro_valor_us'];
                $VALOR = $pro['pro_valor'];
                $PESO = $pro['pro_peso'];
                $QTD = 1;
                $IMG = $pro['pro_img_p'];
                $LINK = Rotas::pag_ProdutosInfo(). '/'.$ID.'/'.$pro['pro_slug'];
                $ACAO = $_POST['acao'];
            }

            switch ($ACAO) 
            {
                //ADICIONAR PRODUTO AO CARRINHO
                case 'add':
                        //VERIFICAR SE NÃO EXISTE O PRODUTO NO CARRINHO / INSIRA
                        if(!isset($_SESSION['PRO'][$ID]['ID']))
                        {
                            $_SESSION['PRO'][$ID]['ID'] = $ID;
                            $_SESSION['PRO'][$ID]['NOME'] = $NOME;
                            $_SESSION['PRO'][$ID]['VALOR'] = $VALOR;
                            $_SESSION['PRO'][$ID]['VALOR_US'] = $VALOR_US;
                            $_SESSION['PRO'][$ID]['PESO'] = $PESO;
                            $_SESSION['PRO'][$ID]['QTD'] = $QTD;
                            $_SESSION['PRO'][$ID]['IMG'] = $IMG;
                            $_SESSION['PRO'][$ID]['LINK'] = $LINK;
                        }
                        //SE EXISTIR SOMA A QUANTIDADE E ACRESCENTA
                        else
                        {
                            $_SESSION['PRO'][$ID]['QTD'] += $QTD;
                        }
                        echo '<h4>Produto inserido</h4>';
                    break;
                    //ELIMINR PRODUTO DO CARRINHO
                case 'del':
                    $this->CarrinhoDEL($id);
                    echo '<h4>Produto Removido! </h4>';
                    break;
                    //LIMPAR O CARRINHO
                case 'limpar':
                    $this->CarrinhoLimpar();
                    echo '<h4>Produtos Removidos! </h4>';
                    break;
            }
        }

        //Deletar o produto do carrinho
        private function CarrinhoDEL($id)
        {
            unset($_SESSION['PRO'][$id]);
        }
        
        //Deletar todos produtos
        private function CarrinhoLimpar()
        {
            unset($_SESSION['PRO']);
        }

    }

?>