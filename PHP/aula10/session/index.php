<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    $_SESSION["user"] = "Joao";
    echo "Usuario armazenado na seção";
    ?>
    <hr>
    <a href="pag2.php">Pagina 2</a>
</body>
</html>