<?php

$idadesAlunos = [23, 17, 24, 33, 32, 29, 53, 52, 33, 32];
$idadesAlunos[] = 88; // adciona automaticamente no final da lista
echo "Array de tamnho: " . count($idadesAlunos) . "\n";
for ($i = 0; $i < count($idadesAlunos); $i++) {
    echo "índice $i é $idadesAlunos[$i]\n";
}
