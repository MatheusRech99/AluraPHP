<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}
function sacar(array $conta, float $valorSaque): array
{
    if ($valorSaque > $conta['saldo']) {
        exibeMensagem('voce nao pode sacar dessa conta');
    } else {
        $conta['saldo'] -= $valorSaque;
    }
    return $conta;
}
function depositar(array $conta, float $valorDeposito): array
{
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;
    } else {
        exibeMensagem('Depositos precisam ser positivos');
    }
    return $conta;
};

function titularMaisculo(array &$conta) // & para receber a referencia da conta / tomar cuidado para nao exagerar e perder o controle da variavel e os impactos dela no sistema
{

    $conta['titular'] = mb_strtoupper($conta['titular']);
};

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular  | Saldo: $saldo</li>";
}
