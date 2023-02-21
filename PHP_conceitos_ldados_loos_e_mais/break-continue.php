<?php

for($contador = 0; $contador <= 15; $contador ++){
    if($contador == 13){
        continue; // pulando o loop caso a verificaçao seja true
        // break; // pausa o loop caso a verificação seja true
    }
        echo "$contador\n";
}