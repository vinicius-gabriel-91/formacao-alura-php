<?php
    require_once 'funcoes.php';
    $contasCorrentes = [
                        123456 => ['titular' => 'Vinicius', 'saldo' => 2000],
                        123457 => ['titular' => 'Maria', 'saldo' => 1000],
                        123458 => ['titular' => 'Jorge', 'saldo' => 300]
                        ];

                        

    $contasCorrentes[123456] = sacar($contasCorrentes[123456], 500);
    $contasCorrentes[123456] = depositar($contasCorrentes[123456], -100);    

    foreach ($contasCorrentes as $numConta => $conta){
        echo "$numConta = {$conta['titular']}" . PHP_EOL;
        echo "Saldo = {$conta['saldo']}" . PHP_EOL . PHP_EOL;
    }

