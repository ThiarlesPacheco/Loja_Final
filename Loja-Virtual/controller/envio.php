<?php 
    $to = Config::EMAIL_USER;
    echo $to;
    $subject = 'Contato - Loja de Chuteira Thiearles';
    $message = 'Email de: ' .$_POST['nome']. "\r\n" .$_POST['mensagem'];
    echo '<br>';
    echo $message;
    $dest = $_POST['email'];

    $headers = "From: " .$dest;

    mail($to, $subject, $message, $headers);
?>
<script>
    alert('Email enviado com Sucesso!')
</script>
<!--REDIRECIONAR PARA PÁGINA DE CONTATO-->
<meta http-equiv="refresh" content="0; url=contato">