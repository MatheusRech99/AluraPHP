<?php

$peso = 90;
$altura = pow(1.90, 2);
$imc = floor($peso / $altura);


if($imc < 18.5){
    echo "IMC de $imc = Magrin\n";
} else if($imc < 24.9) {
    echo "IMC de $imc = Peso ideal\n";
} else if($imc < 29.9) {
    echo "IMC de $imc = Excesso de bagagem\n";
} else if($imc < 34.9) {
    echo "IMC de $imc = Obesidade tier 1\n";
} else if($imc < 39.9) {
    echo "IMC de $imc = Obesidade tier 2\n";
} else {
    echo "IMC de $imc = Obesidade tier 3\n";
}
