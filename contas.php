<?php
    require_once 'funcoes.php';
    $contasCorrentes = [
                        123456 => ['titular' => 'Vinicius', 'saldo' => 2000],
                        123457 => ['titular' => 'Maria', 'saldo' => 1000],
                        123458 => ['titular' => 'Jorge', 'saldo' => 300]
                        ];

                        

    $contasCorrentes[123456] = sacar($contasCorrentes[123456], 500);
    $contasCorrentes[123456] = depositar($contasCorrentes[123456], 100);  
    unset($contasCorrentes[123456]); 

    foreach ($contasCorrentes as $numConta => $conta){
        alteraLetraMaiuscula($conta['titular']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $numConta => $conta){?>
        <dt><h3><?= $conta['titular'];?> : <?= $numConta?></h3></dt>
        <dd>Saldo: <?= $conta['saldo'];?></dd>
        <?php } ?>
    </dl>
    
</body>
</html>


