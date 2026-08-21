<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <header>
        <h1>Meu formulario</h1>
    </header>
    <main>
        <section>
            <form action="processa.php" method="POST">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome"><br>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha"><br>
                <input type="submit" value="enviar">
                <input type="reset" value="Limpar">
            </form>
            <hr>
        </section>
    </main>
</body>
</html>