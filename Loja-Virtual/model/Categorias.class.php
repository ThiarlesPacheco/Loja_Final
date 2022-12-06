<?php

    Class Categorias extends Conexao
    {
        private $cate_id, $cate_nome, $cate_slug;

        function __construct()
        {
            parent::__construct(); //INICIA A EXECUÇÃO DA CONEXÃO
        }

        //BUSCAR CATEGORIAS

       function GetCategorias()
       {
            $query = "SELECT * FROM categorias";

            $this->ExecuteSQL($query);

            $this->GetListas();
       }

       private function GetListas()
        {
            $i = 1;
            while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'cat_id' => $lista['cat_id'],
                'cat_nome' => $lista['cat_nome'],
                'cat_slug' => $lista['cat_slug'],
                'cat_link' => Rotas::pag_Produtos() .'/'. $lista['cat_id']. '/' .$lista['cat_slug'],
                'cat_link_adm' => Rotas::pag_ProdutosADM() .'/'. $lista['cat_id']. '/' .$lista['cat_slug'],
            );

            $i++;

        endwhile;
        } 

        function Inserir($cate_nome){
        
            // trato os campos
            $this->setCate_nome($cate_nome);
            $this->setCate_slug($cate_nome);
            
            // monto a SQL
            $query = " INSERT INTO {$this->prefix}categorias (cat_nome, cat_slug )";
            $query.= " VALUES (:cate_nome, :cate_slug )";
            // passo so parametros
            $params = array(':cate_nome' => $this->getCate_nome(),
                            ':cate_slug' => $this->getCate_slug(),
                          
                );
            // executo a minha SQL
                if($this->ExecuteSQL($query, $params)):
                    return TRUE;
                    
                else:
                    return FALSE;
                    
                endif;
            
        }

        //FUNÇÃO EDITAR

        function Editar($cate_id,$cate_nome){
        
            // trato os campos
            $this->setCate_nome($cate_nome);
            $this->setCate_slug($cate_nome);
            
            // monto a SQL
            $query = " UPDATE {$this->prefix}categorias ";
            $query.= " SET cat_nome = :cate_nome, cat_slug = :cate_slug ";
            $query.= " WHERE cat_id = :cate_id ";
            // passo so parametros
            $params = array(':cate_nome' => $this->getCate_nome(),
                            ':cate_slug' => $this->getCate_slug(),
                            ':cate_id'   => (int)$cate_id,
                );
            // executo a minha SQL
                if($this->ExecuteSQL($query, $params)):
                    return TRUE;
                    
                else:
                    return FALSE;
                    
                endif;
            
            
        }

        //FUNÇÃO APAGAR CATEGORIAS

        function Apagar($cate_id){
                
            // verifico se  tenho itens antes de apagar a categoria
            $pro = new Produtos();
            $pro->GetProdutosCateID($cate_id);
            
            if( $pro->TotalDados() > 0):
                echo '<div class="alert alert-danger" > Esta categoria tem: ';
                echo $pro->TotalDados();
                echo ' produtos. Não pode ser apagada, para apagar precisa primeiro apagar os produtos dela </div>';
                    // se nao tiver produtos nela  eu apago 
            else:
                
                    // monto a SQL
            $query = " DELETE FROM {$this->prefix}categorias";
            $query.= " WHERE cat_id = :id";
            
            // passo os parametros
            $params = array(':id' => (int)$cate_id);
            // executo a SQL

            if($this->ExecuteSQL($query, $params)):
                    return TRUE;
                    
                else:
                    return FALSE;
                    
                endif;
            
            endif;

        
        }


        //MÉTODOS GET

        function getCate_nome() {
            return $this->cate_nome;
        }
    
        function getCate_slug() {
            return $this->cate_slug;
        }

        //MÉTODOS SET

        function setCate_nome($cate_nome) {
       
            $this->cate_nome = filter_var($cate_nome, FILTER_SANITIZE_STRING);
        }
    
        function setCate_slug($cate_slug) {

            $this->cate_slug = Sistema::GetSlug($cate_slug);
        }
    

    }

?>