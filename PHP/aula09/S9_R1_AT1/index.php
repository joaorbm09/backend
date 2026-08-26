<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscrição HighTech</title>
</head>
<body>
    <header><!--Aqui esta o cabeçalho com sua linha principal-->
        <h1>Faça sua inscrição para a vaga do curso de desinvolvimento de sistemas</h1>
    </header>
    <main><!--uso de semanticas como o main e o section-->
        <section>
            <form action="processa.php" method="POST"><!-- Define o formulário, enviando os dados via POST para o arquivo processa.php -->
                <div>
                    <!-- Rótulo e campo de texto para o Nome -->
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome"><br>
                </div>
                <div>
                    <!-- Rótulo e campo para o Telefone-->
                    <label for="tel">Telefone: </label>
                    <input type="text" name="telefone" id="telefone"><br>
                </div>
                <div>
                    <!-- Rótulo e campo para o CPF-->
                    <label for="CPF">CPF: </label>
                    <input type="text" name="CPF" id="CPF"><br>
                </div>
                <div>
                    <!--botões-->
                    <input type="submit" value="enviar">
                    <input type="reset" value="Limpar">
                </div>
            </form>
            <hr>
        </section>
    </main>
</body>
</html>