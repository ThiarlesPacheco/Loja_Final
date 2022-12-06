<?php
    Class Conexao extends Config
    {
        private $host, $user, $senha, $banco, $port;

        protected $obj, $itens = array(), $prefix;

        public $paginacao_links, $totalpags, $limite, $inicio;


        function __construct()
        {
            $this->host = self::BD_HOST;
            $this->user = self::BD_USER;
            $this->senha = self::BD_SENHA;
            $this->banco = self::BD_BANCO;
            $this->port = self::BD_PORT;
            $this->prefix = self::BD_PREFIX;

            try {

                if($this->Conectar() == null)
                {
                    $this->Conectar();
                }
                

            } catch (Exception $e) {
                exit($e->getMessage(). '<h2>Erro ao conectar com o banco de dados</h2>');
            }
        }

        //DEPOIS DE INSTÂNCIAR TUDO DO CONFIG.class, CRIAR FUNÇAÕ PARA FAZER A CONEXÃO COM O BANCO DE DADOS
        private function Conectar()
        {
            $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            );
            $link = new PDO("mysql:host={$this->host};dbname={$this->banco};port={$this->port}", $this->user, $this->senha, $options);

            return $link;
        }

        //MÉTODO PARA EXECUTAR AS QUERY
        function ExecuteSQL($query, array $params = NULL)
        {
            $this->obj = $this->Conectar()->prepare($query);

            if(is_countable($params) > 0){
                foreach($params as $key =>$value)
                {
                    $this->obj->bindvalue($key, $value);
                }
            }

            return $this->obj->execute();
        }

        //FUNÇAO PARA TRAZER RESULTADO DAS CONSULTAS
        function ListarDados()
        {
            return $this->obj->fetch(PDO::FETCH_ASSOC);
        }

        //FUNÇAO QUE VAI CHAMAR TOTAL DE DADOS - VAI VERIFICAR QUANTAS LINHAS EXISTEM NA TABELA
        function TotalDados()
        {
            return $this->obj->rowCount();
        }

        //FUNÇAO PARA CAPTURAR ITENS
        function GetItens()
        {
            return $this->itens;
        }

        //RECEBENDO A CLASS DA PAGINAÇÃO 
        function PaginacaoLinks($campo, $tabela)
        {
            $pag = new Paginacao();
            $pag->GetPaginacao($campo, $tabela);
            $this->paginacao_links = $pag->link;

            $this->totalpags = $pag->totalpags;
            $this->limite = $pag->limite;
            $this->inicio = $pag->inicio;

            $inicio = $pag->inicio;
            $limite = $pag->limite;

            if($this->totalpags > 0)
            {
                return " limit {$inicio}, {$limite}";
            }
            else{
                return "";
            }
            
        }

        //ESTILIZANDO PAGINAÇÃO
        
        protected function Paginacao( $paginas=array())
        {
            
            $pag = '<ul style="display:flex; justify-content: center; font-size:14pt;">';
                $pag .= '<li style="color:#ef7819; border: 1px solid #ef7819; background: #111;"><a href="?p=1" style="padding: 10px; display:block"> << Inicio</a></>';

                    foreach($paginas as $p):
                        $pag .= '<li style="color:#ef7819; border: 1px solid #ef7819; background: #111;"><a style="padding: 10px; display:block" href="?p='.$p.'">'.$p.'</a></li>';
                    endforeach;

                $pag .= '<li style="color:#ef7819; border: 1px solid #ef7819; background: #111;"><a href="?p='.$this->totalpags.'" style="padding: 10px; display:block">...'.$this->totalpags.' >></a></>';

            $pag .= '</ul>';
           
            //A PAGINAÇÃO SÓ DEVE APARECER SE TIVER MAIS DE UMA PÁGINA NOS PRODUTOS
            if($this->totalpags > 1){

                return $pag;

            }
        }

        //FUNÇÃO QUE VAI CHAMAR A PAGINAÇÃO
        function ShowPaginacao()
        {
            return $this->Paginacao($this->paginacao_links );
        }
    }
?>