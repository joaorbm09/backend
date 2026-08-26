<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php</title>
</head>
<body>
    <?php 
    //voce tambem pode utlizar o require_once no lugar do include, para que a pagina não exiba nada, só que logicamente é necessario que o programa não identifique os arquivos, ou seja na hora de nomear, se nomear errado ele não gera nada, agora o include vai manter a busca e gerar aquilo que der.
    include 'header.php';
    ?>
    <section>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi voluptatum dolor itaque, accusantium adipisci nam debitis unde? Error dicta doloremque ab, earum labore aspernatur nihil qui praesentium totam magnam a!
    </section>
    <a href="pag2.php">Acesse pagina 2</a>
    <?php 
    include 'footer.php';
    ?>
</body>
</html>