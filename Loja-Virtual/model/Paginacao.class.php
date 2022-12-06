<?php

    Class Paginacao extends Conexao
    {
        
        public $limite, $inicio, $totalpags, $link = array();

        function GetPaginacao($campo, $tabela)
        {
            //CRIANDO A PAGINAÇÃO POR TOTAL DE PRODUTO VINDO DO BANCO
            $query = "SELECT {$campo} FROM {$tabela}";
            $this->ExecuteSQL($query);
            $total = $this->TotalDados();

            //LIMITE DA PÁGINA DEFINIDO NO CONFIG
            $this->limite = Config::BD_LIMIT_POR_PAG;

            //DIVIDIR O LIMITE DA PÁGINA E ARREDONDAR PARA CIMA
            $paginas = ceil($total / $this->limite);
            $this->totalpags = $paginas;

            //PASSANDO A PAGINAÇÃO POR PARÂMETRO
            $p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

            //VERIFICAR PÁGINAS
            if($p > $paginas)
            {
                $p = $paginas;
            }

            //Multiplicando a página pela quantidade de limite e subtraindo pelo próprio limite
            $this->inicio = ($p * $this->limite) - $this->limite;

            $tolerancia = 4;
            $mostrar = $p + $tolerancia;

            if($mostrar > $paginas)
            {
                $mostrar = $paginas;
            }

            for($i = ($p - $tolerancia); $i <= $mostrar; $i++):
                if($i < 1)
                {
                    $i = 1;
                }
                array_push($this->link, $i);

            endfor;
        }
    }

?>