<?php  
$nome = 'Joao Wictor';//variavel do tipo "string", onde permite que apareça caracteres
$idade = '17';// declarando a variavel do tipo "int", onde permite que eu coloque numeros inteiros
$salario = '81.90';//declarando a variavel do tipo "float" onde permite que colocamos números decimais ou números quebrados
$localizacao = 'Rua sao nicolau, 579, jardim nossa senhora do carmo';//variavel string
$ano = '2026';//variavel int
$ativa = true;

echo"<h1>Registro de identificação</h1>";//neste echo estou dizendo titulo da pagina ou tambem o cabeçalho principal da paginal
echo"O meu nome é  $nome<br>";// neste "echo" estou dizendo que em um paragrafo de escrito, o codigo ira chamar a variavel nome
echo"A minha idade é  $idade<br>";// neste "echo" estou dizendo que em um paragrafo de escrito, o codigo ira chamar a variavel idade
echo"Tenho na minha conta agora R$ $salario<br>";// neste "echo" estou dizendo que em um paragrafo de escrito, o codigo ira chamar a salario 

echo  $ativa ? "sim" : "não";

echo"<br>Onde eu moro é  $localizacao<br>";// neste "echo" estou dizendo que em um paragrafo de escrito, o codigo ira chamar a variavel localização
echo"Estamos no ano de $ano<br>"; // neste "echo" estou dizendo que em um paragrafo de escrito, o codigo ira chamar a variavel ano
echo "</pre>";//aqui o echo esta imprimindo a tag de pre formatado do html

?>