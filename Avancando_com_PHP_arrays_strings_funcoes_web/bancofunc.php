<?php

// include 'funcoesbanco.php'; //  inclui um arquivo externo que talvez nao seja essencial para o funcionamento programa
// require 'funcoesbanco.php'; //  inclui um arquivo externo que é obrigatorio para o funcionamento do programa
require_once 'funcoesbanco.php'; //  verifica se o arquivo ja foi importado, caso sim, ele nao repete o import

$contasCorrentes = [
    '564.022.852-63' => [
        'titular' => 'Matheus',
        'saldo' => 800
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
unset($contasCorrentes['460.152.233-68']);

$contasCorrentes['564.022.852-63'] = sacar($contasCorrentes['564.022.852-63'], 500);

$contasCorrentes['654.035.589-53'] = depositar($contasCorrentes['654.035.589-53'], 1000);

titularMaisculo($contasCorrentes['564.022.852-63']);

echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
echo "</ul>";

// subrotina executa tudo que é esperado dentro dela mesma, porem nao retorna nenhum valor
// ja uma funçao ela executa e retorna um valor
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banquinho</title>
</head>

<body>
    <h1>Contas Corrrentes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $conta) { ?>
            <dt>
                <h4> <?= $conta['titular']; ?> - <?= $cpf; ?></h4>
            </dt>
            <dt>Saldo: <?= $conta['saldo']; ?></dt>
        <?php } ?>
    </dl>
</body>

</html>