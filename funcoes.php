
<?php
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
    
    function alteraLetraMaiuscula(&$alteracao)
    {
        $alteracao = strtoupper($alteracao);
    }
