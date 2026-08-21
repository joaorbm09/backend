<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quebra senha</title>
</head>
<body>
    <header>
        <h1>Meu primeiro quebrador de senha</h1>
    </header>
    <hr>
    <form action="quebra.php" method="POST"> 
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">
        <input type="submit" value="Quebrar!">
    </form>
    <hr>
</body>
</html>