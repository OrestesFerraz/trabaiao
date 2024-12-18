<?php
session_start();
require "logica-autenticacao.php";

$titulo = "Inicio";
require 'cabecalho.php';


?>

<style>
    body {
        background-image: url(https://wallpapershome.com/images/pages/pic_h/5714.jpg);
        background-position: center center; /* Centraliza na horizontal e vertical */
    background-repeat: no-repeat; /* Impede a repetição */
    background-size: cover; /* A imagem cobre todo o body */
    height: 100vh; /* Garante que o body tenha altura total da janela de visualização */
      margin: 0; /* Remove margens padrões */
      color: white;
    }
</style>

<p class="display-4">
    bem vido ao nosso site 
</p>

<p class="display-4">
    esse site permite que você consulte lugares bons para pesca e pernoite 
</p>
<?php

    if (isset($_SESSION["restrito"]) && $_SESSION["restrito"]) {
        ?>
        <div class="alert alert-danger" role="alert">
            <h4>Esta é uma página PROTEGIDA!!.</h4>
            <p>Você está tentando acessar conteúdo restrito.</p>
        </div>

        <?php
        unset($_SESSION["restrito"]);
    }

require 'rodape.php';

?>