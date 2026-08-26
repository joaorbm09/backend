<?php
//confere para ver se o nome esta vindo formulario
if (isset($_POST["nome"])){ //aqui ele vai chama o nome, e assim que acabar o nome ele vai chamar o resto, logo apos nos echos eles iram puxar o resultado e exibir na tela
    echo "<h1><strong>Seja Bem Vindo!!</strong></h1><hr><br>";
    echo "<strong>Confirmando seus dados!</strong>";
    echo "Seu nome é: <br>". $_POST['nome']."<br>";
    echo "Seu numero de Telefone é: <br>". $_POST['telefone']."<br>";
    echo "Seu CPF é: <br>". $_POST['CPF']."<br>";
    
    }
    //var_dump($_POST);
    ?>
        