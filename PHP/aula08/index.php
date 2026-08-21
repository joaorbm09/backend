    <?php 
    //aqui estou definindo uma função que ira apenas exibir uma mensagem, e para isso eu tenho que chamar a função
    function area(){
        echo "<strong>Area de contabilidade de imposto: </strong>";
    }

    // nesta função estou fazendo uma verificação com parametros, ou seja a função vai ver se o usuario tem mais que 5000 e vai retornar quem tiver mais que isso aparecera que ele tem que pagar imposto, se não ele ficara isento de pagar imposto, e para aparecer eu coloquei o echo e depois o nome do função.
    function verificaConta($valor){
        // aqui estou reutilizadno a função,chamando a função area() dentro de verificaConta()
        area();
        
        if($valor >= 5000){
            return "<br>Valor: R$ {$valor} -- Você tem que PAGAR imposto.<br><br>";
        } else {
            return "<br>Valor: R$ {$valor} -- Você está ISENTO de pagar imposto.<br><br>";
        }
    }

    echo verificaConta(6000);
    echo "<hr>";
    echo verificaConta(3000);


    ?>