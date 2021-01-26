<?php
    // $idade = 15;
    $nome = "Vinicius";
    $acompanhado = false;

    echo("Olá $nome em nosso estabelecimento podem entrar maiores de 18 ou maiores de 16 acompanhados" . PHP_EOL);

    for ($idade = 15; $idade <= 18; $idade ++){
        if ($idade >= 18) {
            echo("Sua idade é $idade portanto seja bem vindo" . PHP_EOL);

        } else if ($idade > 15 and $acompanhado){
            echo("Sua idade é menor de 18 porem maior que 16 e voce esta acompahado portanto pode entrar" . PHP_EOL);

        } else {
            $menor = 18 - $idade;
            echo("infelizmente faltam $menor anos para voce poder entrar" . PHP_EOL);
        }
    }