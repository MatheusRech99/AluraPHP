<?php

$idade = 17;
$acompanhado = true;
 
$responseOk = "Você tem $idade, pode entrar!";
$responseAcompanhado = "Tu é de menor, mas ta acompanhado, entra!";
$responseNo = "Você só pode entrar se tiver mais do que 18 anos.\n";

if($idade >= 18){
   echo $responseOk;
} else if($idade <18 && $acompanhado) {
   echo $responseAcompanhado;
} else {
   echo $responseNo;
}



