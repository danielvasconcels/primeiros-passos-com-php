<?php

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        continue;
    } 
        echo "#$contador" . PHP_EOL;
}


/* 
$contador = $contador + 1;
$contador += 1;
$contador ++;

os exemplos acima fazem exatamente as mesmas funções, porém em alguns casos como podemos observar n precisamos escrver tanto!

break; -> quebrar
continue; -> continuar o código

*/