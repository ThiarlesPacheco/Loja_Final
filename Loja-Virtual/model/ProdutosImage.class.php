<?php

    Class ProdutosImage extends Conexao
    {
        function __construct()
        {
            //INSTANCIAR A CLASSE DE FORMA AUTOMATIZADA
            parent::__construct();
        }
        //PUXANDO AS IMAGENS DE CADA PRODUTO PASSANDO COMO PARÁMETRO O ID
        function GetImagePro($pro)
        {
            $query = "SELECT * FROM {$this->prefix}imagens WHERE img_prod_id = :pro_id";

            $params = array(':pro_id'=>(int)$pro);

            $this->ExecuteSQL($query, $params);
            $this->GetListas();
        }

        private function GetListas()
        {
            $i = 1;
            while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'img_id' => $lista['img_id'],
                'img_nome' => Rotas::ImageLink($lista['img_nome'], 250, 150),
                'img_prod_id' => $lista['img_prod_id'],
                'img_link' => Rotas::ImageLink($lista['img_nome'], 880, 880),
                'img_arquivo' => $lista['img_nome'],
            );

            $i++;

            endwhile;
        }

        //INSERIR IMAGENS
        public function Insert($img,$produto){
        
            $query = "INSERT INTO {$this->prefix}imagens (img_nome,img_prod_id)";
            $query.= " VALUES (:img_nome,:img_prod_id) ";
            
            $params = array(':img_nome'=>$img, ':img_prod_id'=> (int)$produto);
            
            $this->ExecuteSQL($query, $params);
            
            
        }

        //DELETAR IMAGENS
        public function Deletar($img_nome){
        
        
            $query = " DELETE FROM {$this->prefix}imagens ";
            $query .= " WHERE img_nome = :img_nome ";
            
            $params = array(':img_nome'=>$img_nome);
            
            $this->ExecuteSQL($query, $params);
            
        }
    }

?>