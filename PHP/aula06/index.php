<?php
//aqui estamos deixando apenas um pequeno texto de introdução do tema
echo "<h3>Relatório de Metas de vendas dos Contribuintes (do setor de vendas e marketing) da HighTech!</h3>";
//declarando uma variavel para estipularmos a meta, e usar a variavel depois para calculo
$meta = 5000;
//usamos o for aqui para fazer uma contagem de 1 a 10 sem repetir, e podemos usar o for para qualquer outro numero
for ($i = 1; $i <= 10; $i++) {
    //nesta variavel estamos fazendo a multiplicação do indice vezes 1000 que é para deixar como um valor imaginario
    $valor = $i * 1000;
    //nesta condição estamos definindo que se o valor multiplicado na variavel "valor" for maior que o valor da variavel "meta" apareça ao lado do indice do contribuinte o valor que ele arrecadou e uma mensagem de "atingiu a meta", agora se o valor multiplicado for menor, apareça junto ao indice do contribuinte e a mensagem "sua meta não foi batida"
    if ($valor >= $meta) {
        echo "Contribuinte $i: R$ $valor,00 = Atingiu a meta!<br>";
    } else {
        echo "Contribuinte $i: R$ $valor,00 =  Sua meta não foi batida<br>";
    }
}
?>