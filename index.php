<?php

        // 01) Ler, calcular e exibir a pontuação total das quatro notas do aluno.


        $nota1 = 7.5; 
        $nota2 = 8.0; 
        $nota3 = 9.0; 
        $nota4 = 6.5; 

        $totalNotas = ($nota1 + $nota2 + $nota3 + $nota4);
        echo "Pontuação total: " . $totalNotas . PHP_EOL;

    PHP_EOL;        

    // 02) Ler, calcular e exibir a média das quatro notas do aluno.

        $nota1 = 7.5; 
        $nota2 = 8.0; 
        $nota3 = 9.0; 
        $nota4 = 6.5;

        $totalNotas = ($nota1 + $nota2 + $nota3 + $nota4); 

        $mediaNotas = $totalNotas / 4; 
        echo "Média das notas:  " . $mediaNotas . PHP_EOL;

    PHP_EOL; 

        // 03) Ler, calcular e exibir a área do retângulo em metros quadrados.

        $largura = 5;
        $altura = 10; 

        $areaRetangulo = ($largura * $altura);

        echo "Área do retângulo: " . $areaRetangulo . PHP_EOL; 

    PHP_EOL; 

        // 04) Ler dois valores diferentes e informar a diferença entre eles.

        $valor1 = 20; 
        $valor2 = 15; 

        $diferenca = ($valor1 - $valor2);

        echo "Diferença entre os valores: " . $diferenca . PHP_EOL; 

    PHP_EOL; 

        // 05) Ler dois valores, calcular e exibir a divisão do primeiro valor pelo segundo.

        $valor1 = 20;
        $valor2 = 4; 

        $divisao = ($valor1 / $valor2); 

        echo "Divisão do primeiro valor pelo segundo: " . $divisao . PHP_EOL; 

    PHP_EOL; 

        // 06) Receber o peso de uma pessoa em quilos, calcular e mostrar esse peso em gramas.

        $pesoQuilos = 85; 

        $pesoGramas = ($pesoQuilos * 1000); 

        echo "Peso em gramas: " . $pesoGramas . "g" . PHP_EOL; 
    
    PHP_EOL; 

        // 07) Calcular o valor a pagar em um restaurante self-service.

        $pesoPrato = 1.75;// em quilos 
        $precoPorQuilo = 45.00; 

        $valorAPagar = ($pesoPrato * $precoPorQuilo); 

        echo "Valor a pagar: R$ " . $valorAPagar. PHP_EOL; 

    PHP_EOL; 

        // 08) Converter temperatura de Fahrenheit para Celsius.

        $temperaturaf = 98.6;
        $temperaturac = ($temperaturaf - 32) / 1.8; 

        echo "Temperatura em Celsius: " . $temperaturac . "ºC". PHP_EOL; 
        echo "Temperatura em Fahrenheit: " . $temperaturaf . "ºF". PHP_EOL; 

    PHP_EOL; 

        // 09) Calcular o diâmetro, comprimento e área de uma circunferência.

        $raio = 7; 
        $diametro = 2 * $raio; 
        $comprimento = 2 * pi() * $raio; 
        $areaCircunferencia = pi()  * pow($raio, 2); 

        echo "Raio de Circunferência: " . $raio .PHP_EOL; 
        echo "Diâmetro:  " . $diametro . PHP_EOL; 
        echo "Comprimento:  " . $comprimento . PHP_EOL; 
        echo "Área: " . $areaCircunferencia . PHP_EOL; 

    PHP_EOL; 

        // 10) Inverter os valores de duas variáveis inteiras.

        $A = 5; 
        $C = 10; 

        echo "Valores antes da troca: " .$A." e ".$C . PHP_EOL; 

        $temp = $A; 
        $A = $C; 
        $C = $temp; 

        echo "Valores depois da troca: " . $A ." e ".$C . PHP_EOL; 

    PHP_EOL; 
    
