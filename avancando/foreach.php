<?php

$contasCorrentes = [
   12345678910 => [
    'titular'  => 'Vinicius',
    'saldo' => 1000
],
   12345567890 => [
    'titular' => 'Maria',
    'saldo' => 10000
],
   23445566677 => [
    'titular' => 'Alberto',
    'saldo' => 300
]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}