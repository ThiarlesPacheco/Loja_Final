<?php
    $smarty = new Template();

    $categorias = new Categorias();

    $categorias->GetCategorias();

    // Adicionar uma nova categoria
    if(isset($_POST['cate_nova']))
    {
        $cate_nome = $_POST['cate_nome'];
        if($categorias->Inserir($cate_nome))
        {
            echo '<script> alert("Categoria inserida com sucesso!!") </script>';
        }
        Rotas::Redirecionar(0, Rotas::pag_CategoriasADM());
    }

    // Editar categoria
    if(isset($_POST['cate_editar']))
    {
        $cate_id = $_POST['cate_id'];
        $cate_nome = $_POST['cate_nome'];

        if($categorias->Editar($cate_id, $cate_nome))
        {
            echo '<script> alert("A Categoria Foi Editada Com Sucesso!!") </script>';
        }
        Rotas::Redirecionar(0, Rotas::pag_CategoriasADM());
    }

     // Deletar categoria
     if(isset($_POST['cate_apagar']))
     {
         $cate_id = $_POST['cate_id'];

         if($categorias->Apagar($cate_id))
         {
             echo '<script> alert("A Categoria Foi Deletada Com Sucesso!!") </script>';
         }
         Rotas::Redirecionar(0, Rotas::pag_CategoriasADM());
     }
 

    $smarty->assign('CATEGORIAS', $categorias->GetItens());

    $smarty->display('adm_categorias.tpl');
?>