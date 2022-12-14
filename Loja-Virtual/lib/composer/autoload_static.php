<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64e64427b378ea299ed00b3248c6180c
{
    public static $classMap = array (
        'Carrinho' => __DIR__ . '/../..' . '/model/Carrinho.class.php',
        'Categorias' => __DIR__ . '/../..' . '/model/Categorias.class.php',
        'Cliente' => __DIR__ . '/../..' . '/model/Clientes.claas.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Conexao' => __DIR__ . '/../..' . '/model/Conexao.class.php',
        'Config' => __DIR__ . '/../..' . '/model/Config.class.php',
        'Correios' => __DIR__ . '/../..' . '/model/Correios.class.php',
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'EnviarEmail' => __DIR__ . '/../..' . '/model/EnviarEmail.class.php',
        'ImageUpload' => __DIR__ . '/../..' . '/model/ImageUpload.class.php',
        'Itens' => __DIR__ . '/../..' . '/model/Intens.class.php',
        'Login' => __DIR__ . '/../..' . '/model/Login.class.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'Paginacao' => __DIR__ . '/../..' . '/model/Paginacao.class.php',
        'Pedidos' => __DIR__ . '/../..' . '/model/Pedidos.class.php',
        'Produtos' => __DIR__ . '/../..' . '/model/Produtos.class.php',
        'ProdutosImage' => __DIR__ . '/../..' . '/model/ProdutosImage.class.php',
        'Rotas' => __DIR__ . '/../..' . '/model/Rotas.class.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'Sistema' => __DIR__ . '/../..' . '/model/Sistema.class.php',
        'Template' => __DIR__ . '/../..' . '/model/Template.class.php',
        'User' => __DIR__ . '/../..' . '/model/User.class.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit64e64427b378ea299ed00b3248c6180c::$classMap;

        }, null, ClassLoader::class);
    }
}
