<?php

$contasCorrentes = [
    '564.022.852-63' => [
        'titular' => 'Matheus',
        'saldo' => 2500
    ],
    '654.035.589-53' => [
        'titular' => 'Magui',
        'saldo' => 25000
    ],
    '460.152.233-68' => [
        'titular' => 'Gelasio',
        'saldo' => 250000
    ]
];

$contasCorrentes['126.255.323-95'] = [
    'titular' => 'Otavio',
    'saldo' => 250
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] .  " " . "R$". $conta['saldo'] . ",00" . PHP_EOL;
}