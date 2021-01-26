<?php
    $peso = 65;
    $altura = 1.56;
    $imc = $peso / ($altura ** 2);

    if ($imc < 18.5){
        echo("Seu IMC é de: $imc e voce esta: abaixo do peso" . PHP_EOL);
    } else if ($imc < 25) {
        echo("Seu IMC é de: $imc e voce esta: peso normal" . PHP_EOL);
    } else if ($imc < 30) {
        echo("Seu IMC é de: $imc e voce esta: sobrepeso" . PHP_EOL);
    } else if ($imc < 35) {
        echo("Seu IMC é de: $imc e voce esta: obesidade grau I" . PHP_EOL);
    } else if ($imc < 40) {
        echo("Seu IMC é de: $imc e voce esta: obesidade grau II (severa)" . PHP_EOL);
    } else {
        echo("Seu IMC é de: $imc e voce esta: obesidade grau III (mórbida)" . PHP_EOL);
    }

    