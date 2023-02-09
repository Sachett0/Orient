<?php

function funcao1(){
    echo "Entrei na função 1" . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $problema) // catch(Throwable $problema)
    {
        echo "Resolvi o problema na função 1" . PHP_EOL;
    }
    echo "Saindo da função 1" . PHP_EOL;

}

function funcao2(){
    echo "Entrei na função 2" . PHP_EOL;

   /* $arrayFixo = new SplFixedArray(2);
    $arrayFixo[3] = "Valor";
    intdiv(8, 0);

    for ($i = 1; $i <= 5; $i++){
        echo $i . PHP_EOL;
    }*/

    //throw new RuntimeException();
    // $exception = new RuntimeException();
    // throw $exception;

    echo "Saindo da função 2" . PHP_EOL;

}

echo "Iniciando sistema" . PHP_EOL;
funcao1();
echo "Saindo do sistema" . PHP_EOL;