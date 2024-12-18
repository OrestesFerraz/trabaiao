<?php

function autenticado()
{
    if (isset($_SESSION["email"])) {
        return true;
    } else {
        return false;
    }
}

function email_usuario()
{
    return $_SESSION["email"];
}

function redireciona($pagina = null)
{
    if (empty($pagina)) {
        $pagina = "index.php";
    }
    header("Location: " . $pagina);
}