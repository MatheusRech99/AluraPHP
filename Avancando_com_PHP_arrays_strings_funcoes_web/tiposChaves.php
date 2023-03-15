<?php
$array = [
    1 => "a",
    '1' => 'b', // php observa se pode converter pra int, se sim, ele o faz e sobrescreve o primeiro indice
    1.5 => 'c', // converte para int ignorando o resto dps da virgula, e sobrescreve o indice 1
    true => 'd' //  true equivale a 1, que convertido pra int pelo php , sobrescreve o indice 2
];

foreach ($array as $item) {
    echo $item;
}
