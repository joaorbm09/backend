<?php

echo "Calculos da emrpesa HighTech" . "<br>"; //Aqui estou definindo um leve cabeçalho apenas para organização da pagina em php;
echo "<br>";//deixando um espaço entre as frases
echo "Esta pagina é para orientar nossos trbaalhadores a receber seus salarios, o valor é mostrado pela quantidade de horas<br>";// leve subtitulo
echo "<br>";//deixando um espaço;
$num1 = 10;//declaração de varieavel;
$num2 = 9;//declaração de variavel;
$num3 = 80;//declaração de variavel

$result = $num1 + $num2; //declarando uma variavel para a soma de horas e logo depois para o calculo do salario


echo "A soma das horas trabalhadas $num1 + $num2 nos dias de segunda e terça-feira foram: " . $result . "<br>";//neste echo estou mostrando para o usuario a conta da soma de suas horas trabalhadas entre segunda e terça-feira e dando o resultado usando a variavel $result, nesta linha também está sendo utilizado a concatenação, para podermos separar o codigo e organizar algo estatistico na mesma linha
echo "A multiplicação do seu salario $result * $num3: " . $result * $num3 . "<br>";// aqui estou usando o echo para mostrar o calculo do salario do usuario usando a varivael result e a varia num3, tedno assim o resultado do salario, além disso, nesta linha e na liha acima esotu fazendo calculos aritméticos, usando o "+" e o "*";

echo "Você precisa ter pelo menos 10 horas por semana para receber o salario <br>";//leve descrição e condição ao usuario, baseado apenas no exemplo que eu fiz para executar a atividade;
echo $result > 10 ? "Tem mais de 10 horas, se voce tem mais de 10 horas podera receber o salario!!" : "Tem menos de 10 horas, se você não alcançou a meta de horas, não poderá receber o salario!!";//pequena comparação para o usuario saber, se ele compriu as 10 horas  de serviço ou não, se ele tiver mais ele podera receber o salario, caso contrario não;


?>