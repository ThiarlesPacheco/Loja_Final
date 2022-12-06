<?php

Class Template extends SmartyBC
{
    function __construct(){
        parent:: __construct();

        //Importando o Diretório das templates que estão na view
        $this->setTemplateDir('view/');
        $this->setCompileDir('view/compile');
        $this->setCacheDir('view/cache');

    }
}