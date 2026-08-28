<?php

// Inicia ou recupera a sessao atual do colaborador.
session_start();


// Processa os dados somente quando o formulario foi enviado.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Guarda o nome e o cargo enviados pelo formulario na sessao.
    $_SESSION["user"] = $_POST["nome"];
    $_SESSION["cargo"] = $_POST["cargo"];

    // Guarda o nome em um cookie que expira em 10 segundos.
    setcookie("nome", $_POST["nome"], time() + 10);
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo</title>
</head>


<body>
    <?php
    // Inclui o cabecalho comum da atividade.
    include 'header.php';
    ?>

    <h2>Dados do Colaborador</h2>

    <?php
    // REQUISITO SESSÃO: Exibe o nome e o cargo
    // Exibe os dados armazenados na sessao.
    if (isset($_SESSION["user"])) {
        echo "Usuário: <strong>" . $_SESSION["user"] . "</strong><br>";
        echo "Cargo: <strong>" . $_SESSION["cargo"] . "</strong><br>";
    }

    // Exibe o nome salvo no cookie, quando ele estiver disponivel.
    if (isset($_COOKIE["nome"])) {
        echo "Cookie Nome: <strong>" . $_COOKIE["nome"] . "</strong><br>";
    } else {
        echo "Cookie Nome não encontrado.<br>";
    }
    ?>

    <br>
    <a href="index.php">Voltar</a>
</body>

</html>