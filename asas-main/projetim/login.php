<?php
session_start();
require "logica-autenticacao.php";

$titulo = "Login (Autenticação)";
require 'header.php';



require 'conexao.php';

?>


    <?php
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);


    echo "<strong>Email:</strong> $email <br>";
    
    $sql = "SELECT senha FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt ->execute([$email]);

    $row = $stmt->fetch();

    if (password_verify($senha, $row['senha'])) {
        //Deu certo

        $_SESSION["email"] = $email;

    ?>
        <br><div class="alert alert-success" role="alert">
            <h4>Autenticado com sucesso.</h4>
        </div>
    <?php
    } else {
        //Não deu certo, SENHA OU EMAIL INCORRETOS.

        unset($_SESSION["email"]);


    ?>
        <div class="alert alert-danger" role="alert">
            <h4>Falha ao efetuar a autenticação.</h4>
            <p>Usuário ou senha incorretos.</p>
        </div>
    <?php
    }

    ?>