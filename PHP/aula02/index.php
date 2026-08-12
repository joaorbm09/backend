<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa PHP</title><!-- defini o titulo da aba-->
</head>
<body>
    <?php
        echo "<h1><strong>Página da empresa PHP</strong></h1><br>";//aqui estou declarando uma escrita em negrito para exemplificar um titulo
        echo "<p> A empresa PHP tem o objetivo de ajudar os usuarios para melhorar o seu uso de PHP em seus trabalhos </p>"; //aqui é o paragrafo de descrição
        echo "<hr>";// o hr esta sendo utilizado apra criar uma liha de separação entre a imagem e a parte de texto
        echo "<img src='https://imgs.search.brave.com/WqemGrHG_eLPN1FF_rgqWzEajNTIF9ijwdxegsUjn9Q/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/ZnJlZXBuZ2xvZ29z/LmNvbS91cGxvYWRz/L3BocC1sb2dvLXBu/Zy9waHAtbG9nby1w/bmctdHJhbnNwYXJl/bnQtc3ZnLXZlY3Rv/ci1iaWUtc3VwcGx5/LTEucG5n'>";// aqui estou colocando uma imagem na minha pagina usando tag img
        echo "<hr>"; 

        echo "<br>Esta página serve para mostrar os trabalhos em pratica de PHP. Aqui nesta página estaremos executando trabalhos em PHP<br>"; // Aqui eu estou impriindo na minha pagina frases exemplares, que no caso utilizamos o echo dentro do php pra poder imprimir algo. Dentro das aspas é o que será impresso, o "<br>" esta sendo utilizado para quebrar as linhas na pagina ou seja, na tela aparecera as tres  frases separadas

        echo "<button>Clique aqui</button>"
    ?>
</body>
</html>