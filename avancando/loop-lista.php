<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}


/* 
Podemos fazer da msm forma q foi mostrado acima!
O modo executado acima já automatiza a contagem de arrays e nos poupa de ficar contand o numero de itens q existe na lista.

for ($i = 0; $i < 7; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}

Esse é o método padrão!
*/