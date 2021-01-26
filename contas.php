<?php
    $contasCorrentes = [
                        123456 => ['titular' => 'Vinicius', 'saldo' => 2000],
                        123457 => ['titular' => 'Maria', 'saldo' => 1000],
                        123458 => ['titular' => 'Jorge', 'saldo' => 300]
                        ];

                        

    $contasCorrentes[123456] = sacar($contasCorrentes[123456], 500);
    $contasCorrentes[123456] = depositar($contasCorrentes[123456], -100);    

    foreach ($contasCorrentes as $numConta => $conta){
        echo $numConta, " = ", $conta['titular'] . PHP_EOL;
        echo "Saldo = ", $conta['saldo'] . PHP_EOL . PHP_EOL;
    }

// -----------------------------Funções---------------------------------------------

    function sacar(array $conta, float $valor) :array
    {

        if ($conta['saldo'] > $valor){
                $conta['saldo'] -= $valor;
        } else {
            echo "Voce não possui saldo suficiente para o saque" . PHP_EOL;
        }
        return $conta;
    }

    function depositar(array $conta, float $valor): array
    {
        if ($valor > 0){
            $conta['saldo'] += $valor;
        } else{
            echo "Valor invalido! o valor a depositar não pode ser negativo". PHP_EOL;
        }
        return $conta;
    }