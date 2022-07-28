<?php

require __DIR__."/vendor/autoload.php";

use App\Files\CSV;

$dados = [
    [
        4,
        'Produto 4',
        'Produto de teste'
    ],
    [
        5,
        'Produto 5',
        'Produto de teste amostra'
    ],
    [
        6,
        'Produto 6',
        'Produto de teste Sales'
    ]
];

$sucesso = CSV::criarArquivo(__DIR__ . '/files/arquivo.csv', $dados, ',');

var_dump($sucesso);