<?php

$conta = [
    'titular' => 'Matheus',
    'saldo' => 2500
];
$conta2 = [
    'titular' => 'Gabriel',
    'saldo' => 250000
];

$conta3 = [
    'titular' => 'Gustavo',
    'saldo' => 25000
];

$contasCorrentes = [$conta, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . "\n";
}
