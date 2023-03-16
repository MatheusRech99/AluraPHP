<?php

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

exit();
$contasCorrentes = [
    '564.022.852-63' => [
        'titular' => 'Matheus',
        'saldo' => 2500
    ],
    '654.035.589-53' => [
        'titular' => 'Magui',
        'saldo' => 3000
    ],
    '460.152.233-68' => [
        'titular' => 'Gelasio',
        'saldo' => 250000
    ]
];


if (500 > $contasCorrentes['654.035.589-53']['saldo']) {
    exibeMensagem('vai dar nao');
} else {
    $contasCorrentes['654.035.589-53']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} R$ {$conta['saldo']} ,00");
}
