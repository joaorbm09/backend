<?php 
setcookie("user", "Joao", time()+60);
if(isset($_COOKIE["user"])){
    echo "Cookie setado com o nome: ". $_COOKIE["user"];
}else {
    echo "Cookie ainda não está definido<br>";
}
var_dump($_COOKIE);
?>