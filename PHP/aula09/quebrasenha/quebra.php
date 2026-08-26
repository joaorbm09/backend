<?php 
$senha = isset($_POST["senha"]) ? (int)$_POST['senha'] : 0;
$atual = 0;
while ($atual != $senha){
    echo "tentando senha:  $atual<br>";
    $atual ++;
};
echo "Sua senha é: $atual";
header("refresh:5;url=index.php");
?>