<?php
//programa que verifica a idade
//declara a varivel idade
    $idade = 18;
    //verifica se a idade é maior ou igual a 18 
        if($idade <= 12){
            echo "Criança";
        } elseif ($idade <= 21){
            echo "adolecente";
        } elseif($idade <= 65){
            echo "adulto";
        } elseif($idade >= 65){
            echo "senior";
        }

//criando a estrutura swich case:
$diaSemana = 1;
    
switch($diaSemana){
    case 1:
        echo "Segunda<br>";break;
    case 2:
        echo "Terça<br>";break;
    case 3:
        echo "Quarta<br>";break;
    case 4: 
        echo "Quinta<br>";break;
    case 5: 
        echo "Sexta<br>";break;
    case 6:
        echo "Sabado<br>";break;
    case 7:
        echo "Domingo<br>";break;
    default:
        echo "Dia invalido";break;
}

$setor = "RH";
switch($setor){
    case "TI":
        echo "Tecnologia da informação";break;
    case "RH":
        echo "Recursos humanos";break;
}

?>