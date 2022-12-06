<?php
    
    Class Config
    {

        //INFORMAÇÕES BÁSICAS DO SITE
        const SITE_URL = "http://localhost";
        const SITE_PASTA = "Escola_Hugo_Curso/Loja-Virtual"; //DELETAR O VALOR SE FOR HOSPEDAR
        const SITE_NOME = "Loja Thiarles Chuteiras";
        const SITE_EMAIL_ADM = "tharlespacheco@hotmail.com";
        const BD_LIMIT_POR_PAG = 6;
        const SITE_CEP = '88805420';

        //INFORMAÇÕES DO BANCO DE DADOS
        const BD_HOST = "localhost",
              BD_USER = "root",
              BD_SENHA = "",
              BD_BANCO = "lojathiarles",
              BD_PORT = 3306,
              BD_PREFIX = "";

        //INFORMAÇÕES PARA PHP MAILER
        const EMAIL_HOST = "smtp.office365.com";
        const EMAIL_USER = "gelsonjmatias@outlook.com";
        const EMAIL_NOME = "Contato Loja Chuteiras";
        const EMAIL_SENHA = "bemvindo17*";
        const EMAIL_PORTA = 587;
        const EMAIL_SMTPAUTH = true;
        const EMAIL_SMTPSECURE = "STARTTLS";
        const EMAIL_COPIA = "gelsonjmatias@outlook.com";
    }
?>