<?php
//neste trecho estou dando um leve cabeçalho para a minha pagina, contendo um leve titulo e uma leve descrição, para adequar a atividade
echo "Bem vindos a página de setores da HighTech!!<br>";
echo "<br>";
echo "Aqui voces estaram colocando o setor que voce esta emrpegado e sua idade para contabilizar os impostos para o nosso setor de recursos humanos entrar em contato!<br>";
echo "<br>";
echo "Nossa empresa trabalha com o sistema de idade de forma diferente, aqui quanto mais idade voce tem maior é o cargo então por isso pedimos a sua idade!!<br>";

echo "Informe logo abaixo: <br>";

$idade = 45;//variavel declaranda para usar no problema de idade, que no caso a empresa detecta a idade e logo manda o cargo que a pessoa esta, para contabilizar o valor de salario, utlizando o if e o elseif podemos dizer se a idade da pessoa é maior ou igual e se for maior ou igual apareça um resultado 
    //verifica se a idade é maior ou igual a 18
        if($idade <= 18){
            echo "Jovem Aprendiz<br>";
        } elseif ($idade <= 20){
            echo "Profissional efetivado<br>";
        } elseif($idade <= 23){
            echo "Estagiario!!<br>";
        } elseif($idade <= 30){
            echo "Junior<br>";
        } elseif($idade <= 35){
            echo "Senior";
        } elseif($idade <= 45){
            echo "Sócio";
        }
echo"<br>";

$setor = "RH";
//aqui usando o switch podemos, definir se caso acontece algo (ou seja algo que o usuario escreva), gere uma resposta 
//aqui estou dizendo para meu usario escrever o seu setor para contabilizar o salario dele depois
switch($setor){
    case "TI":
        echo "Tecnologia da informação";break;
    case "RH":
        echo "Recursos humanos";break;
    case "MK":
        echo "Marketing";break;
    case "FO":
        echo "Financeiro";break;
    case "SP":
        echo "Suporte ao cliente";break;
    default:
        echo "Dia invalido";break;
}
echo "<br>";
echo "OK, estamos contabilizando!!"



?>