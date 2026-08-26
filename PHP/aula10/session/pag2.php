<?php 
session_start();
echo "seja bem vindo <br>" . $_SESSION["user"];
?>
<a href="index.php"> Voltar</a>