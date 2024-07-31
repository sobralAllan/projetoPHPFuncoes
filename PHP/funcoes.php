<?php
    //Instanciar
    $num1 = 0; //Variáveis Globais (Código todo utiliza)
    $num2 = 0;

    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do somar

    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do subtrair

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do multiplicar

    function dividir($num1, $num2){
        if($num2 == 0){
            return "Impossível dividir por zero!";
        }else{
            return $num1 / $num2;
        }
    }//fim do dividir

    function potencia($num1, $num2){
        if($num2 < 0){
            return "Impossível calcular a potência de expoente negativo";
        }else{
            return pow($num1, $num2);
        }
    }//fim do método

    function raiz($num1){
        if($num1 >= 0){
            return sqrt($num1);
        }else{
            return "Impossível calcular a raiz de número negativo";
        }
    }//fim do método

    function tabuada($num1){
        $i = 0;
        $resultado = "";
        for($i; $i<=10;$i++){
            $resultado .= "<br>".$num1." * ".$i." = ".($num1*$i);
        }//fim do for
        return $resultado;
    }//fim do método

    function areaRetangulo($base,$altura){
        if(($base <= 0) || ($altura <= 0)){
            return "Impossível calcular a área";
        }else{
            return $base * $altura;
        }
    }//fim do método

    function delta($a,$b,$c){
        //delta = b² - 4 * a * c
        $delt = pow($b,2) - 4 * $a * $c;
        if($delt < 0){
            return -1;
        }else{
            return $delt;
        }
    }//fim do delta

    function x1($a,$b,$c){
        $d = delta($a,$b,$c);
        if($d == -1){
            return "Impossível calcular X1, delta negativo";
        }else{
            return (-$b + sqrt($d))/(2*$a);
        }
    }//fim do x1

    function x2($a,$b,$c){
        $d = delta($a,$b,$c);
        if($d == -1){
            return "Impossível calcular X2, delta negativo";
        }else{
            return (-$b - sqrt($d))/(2*$a);
        }
    }//fim do x1

    function parImpar($num){
        if($num % 2 == 0){
            return "Par";
        }else{
            return "Ímpar";
        }
    }//fim do parImpar

    function maioridade($idade){
        if($idade < 18){
            return "Menor de Idade";
        }else{
            return "Maior de Idade";
        }
    }//fim so maioridade

    function dobro($num){
        return $num * 2;
    }//fim do método

    //F = C x 1,8 + 32
    function celsiusFahrenheit($celsius){
        return ($celsius * 1.8)+32;
    }//fim do método

    //Faça um programa que peça três números e exiba o maior deles.
    //&& == e 
    //|| == ou
    function buscarMaior($num1, $num2, $num3){
        if(($num1 > $num2) && ($num1 > $num3)){
            return $num1;
        }else if(($num2 > $num1) && ($num2 > $num3)){
            return $num2;
        }else{
            return $num3;
        }
    }//fim do método

    //Faça um programa que peça um número e 
    //verifique se ele é positivo, negativo ou zero.
    function verificarNumero($num){
        if($num > 0){
            return "Positivo";
        }else if($num < 0){
            return "Negativo";
        }else{
            return "Zero";
        }
    }//fim do método

    //Faça um programa que peça um número e 
    //exiba a soma de todos os números 
    //de 1 até esse número.
    function somarNumeros($num){
        $i = 1;
        $soma = 0;
        for($i; $i <= $num; $i++){
            $soma += $i;
        }
        return $soma;
    }//fim do método

    //Strlen("") - mede o tamanho de uma palavra
    //substr("")
    function primo($num){
        if($num <= 1){
            return "Não é primo";
        }
        for($i = 2; $i <= sqrt($num); $i++){
            if($num % $i == 0){
                return "Não é primo";
            }
        }
        return $num;
    }//fim do método primo

    function palindromo($palavra){
        if($palavra == strrev($palavra)){
            return "Palíndromo!";
        }else{
            return "Não é palíndromo";
        }
    }//fim do método

    function fatorial($num){
        $i = $num-1;
        for($i;$i >= 1;$i--){
            $num *= $i;
        }
        return $num;
    }//fim do método

    function paresLista($num){
        $i = 1;
        $pares = "";
        for($i; $i <= $num; $i++){
            if($i % 2 == 0){
                $pares .= "<br>".$i;
            }
        }//fim do for
        return $pares;
    }//fim do método

    function contarVogais($palavra){
        $tamanho = strlen($palavra);//Tamanho da palavra
        $i = 0;
        $letra = "";
        $contador = 0;
        for($i;$i < $tamanho; $i++){
            $letra = substr($palavra,$i,1);
            
            switch($letra){
                case 'A':
                    $contador++;
                    break;
                case 'a':
                    $contador++;
                    break;
                case 'E':
                    $contador++;
                    break;
                case 'e':
                    $contador++;
                    break;
                case 'I':
                    $contador++;
                    break;
                case 'i':
                    $contador++;
                    break;
                case 'O':
                    $contador++;
                    break;
                case 'o':
                    $contador++;
                    break;
                case 'U':
                    $contador++;
                    break;
                case 'u':
                    $contador++;
                    break;
            }      
        }//fim do for
        return $contador;
    }//fim do método

    function mostrarPrimos($num){
        $numPrimos = "";
        $i=1;
        for($i;$i <= $num; $i++){
            if(primo($i) != "Não é primo"){
                $numPrimos .= "<br>".$i;
            }
        }
        return $numPrimos;
    }//fim do mostrar

    function verificarDatas($mes, $dia, $ano){
        if(checkdate($mes, $dia, $ano)){
            return "Data Válida!";
        }else{
            return "Data Inválida!";
        }
    }//fim do método

    function mediaCincoNumeros($num1, $num2, $num3, $num4, $num5){
        return ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
    }

    function divisores($num){
        $i=1;
        $divisor = "";
        for($i; $i < $num;$i++){
            if($num % $i == 0){
                $divisor .= "\n".$i;
            }
        }
        return $divisor;
    }//fim dos divisores

    function contarPalavras($texto){
        $contar = str_word_count($texto,0);
        return $contar;
    }//fim do método

    function fibonacci($num){
        $i = 0;
        $fib0 = 0;
        $fib1 = 1;
        $fib2 = 0;
        $resultado = $fib0."<br>".$fib1;
        for($i; $i <= $num; $i++){
            $fib2 = $fib0 + $fib1;
            $resultado .= "<br>".$fib2;
            $fib0 = $fib1;
            $fib1 = $fib2;
        }
        return $resultado;
    }//fim do método














    /*
    //Resultados
    echo "<br>A soma dos números é: ".somar(5,8);
    echo "<br>A subtração dos números é: ".subtrair(9,15);
    echo "<br>A multiplicação dos números é: ".multiplicar(10,8);
    echo "<br>A divisão dos números é: ".dividir(3,1);
    echo "<br>A potência dos números é: ".potencia(10,2);
    echo "<br>A raiz do número informado é: ".raiz(10);
    echo "<br>A tabuada do número informado é: ".tabuada(8);
    echo "<br>A área de retângulo é: ".areaRetangulo(5,6);
    echo "<br>O X1 é: ".x1(-8,5,9);
    echo "<br>O X2 é: ".x2(-8,5,9);
    echo "<br>Par ou Ímpar? ".parImpar(10);
    echo "<br>Maior ou menor? ".maioridade(21);
    echo "<br>O dobro do número é: ".dobro(100);
    echo "<br>Temperatura em Fahrenheit: ".celsiusFahrenheit(25);
    echo "<br>O maior dos três é: ".buscarMaior(10,4,60);
    echo "<br>O número é: ".verificarNumero(0);
    echo "<br>A soma dos números é: ".somarNumeros(50);
    echo "<br>É primo? ".primo(4);
    echo "<br>É palíndromo?".palindromo("ovo");
    echo "<br>O fatorial é: ".fatorial(3);
    echo "<br>Os números pares são: ".paresLista(100);
    echo "<br>Vogais na palavra digitada: ".contarVogais("Allan");
    echo "<br>Números primos: ".mostrarPrimos(100);
    echo "<br>".verificarDatas('02','29','1996');
    echo "<br>A média dos 5 números é: ".mediaCincoNumeros(1,5,3,6,8);
    echo "<br>Total de Palavras: ".contarPalavras("Teste número 01");
    echo "<br>Os divisores são: ".divisores(30);
    echo "<br>Sequência de Fibonacci: ".fibonacci(10);
    */


?>