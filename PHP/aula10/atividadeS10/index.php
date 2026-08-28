<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define a codificacao e adapta o layout para diferentes telas. -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <?php 
        // Inclui o cabecalho comum da atividade.
        include 'header.php';
    ?>
  
    <main>
        <section>
                <!-- Envia os dados preenchidos para a pagina de resultado. -->
                <form action="pag2.php" method="POST">
                <label>Nome:</label>
                <!-- O campo e obrigatorio para o envio do formulario. -->
                <input type="text" name="nome" required><br>

               
                <label>Cargo:</label>
                <input type="text" name="cargo" required><br>

                <!-- Botao que envia nome e cargo pelo metodo POST. -->
                <input type="submit" value="Salvar">
            </form>
            <hr>
            <!-- Permite abrir a pagina seguinte diretamente. -->
            <a href="pag2.php">Pagina 2</a>
        </section>
    </main>
</body>
</html>