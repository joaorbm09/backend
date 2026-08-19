<?php 
//Array associativo que representa uma lista de funcionarios e seus cargos
$funcionarios = [
    "João" => "CEO", 
    "Gazola" => "Diretor senior", 
    "Rafael" => "Diretor de markiting", 
    "Kauan" => "Diretor de vendas", 
    "Henrique" => "Diretor de RH"
    ];
//hr para fazer um linha na horizontal
echo "<hr>";
//o foreach vai percorrer o array e vai puxar o nome do funcionario e o seu cargo, ja que o sistema de array associativo é gerado por base de "chave : valor", logo o nome é a chave e o cargo é o valor.
foreach ($funcionarios as $n => $c) {
            echo "Funcionário: $n - Cargo: $c<br>";
    }
?>