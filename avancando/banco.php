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

if (500 > $contasCorrentes['123.455.678-90'] ['saldo']) {
    echo "Você não pode sacar";
} else {
    $contasCorrentes['123.455.678-90'] ['saldo'] -= 500;
}

if (500 > $contasCorrentes['234.455.666-77'] ['saldo']) {
    echo "Você não pode sacar este valor" . PHP_EOL;
} else {
    $contasCorrentes['234.455.666-77'] ['saldo'] -= 500;
}



foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}