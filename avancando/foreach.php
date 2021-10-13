<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular'  => 'Vinicius',
        'saldo' => 1000
    ],
    '123.455.678-90' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '234.455.666-77' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}