<?php

$produtos = [
    'iphone11' => [
        'titulo' => 'Apple iPhone 11',
        'subtitulo' => 'iPhone 11 e 11 Pro Max',
        'preco_base' => 2399.90, 
        'parcelas' => 12,
        'imagens' => [
            'imagens/i11.jpg', 
            'imagens/i11.1.jpg', 
            'imagens/i11.2.jpg', 
            'imagens/i11.3.jpeg'
        ],
        'modelos' => ['iPhone 11', 'iPhone 11 Pro Max'],
        'armazenamento' => ['64GB', '128GB', '256GB'],
        'destaque_familia' => ['iphone13', 'iphone12', 'iphone15'] 
    ],
    'iphone12' => [
        'titulo' => 'Apple iPhone 12',
        'subtitulo' => 'iPhone 12 e 12 Pro Max',
        'preco_base' => 2850.00,
        'parcelas' => 12,
        'imagens' => [
            'imagens/i12.4.jpg',
            'imagens/i12.jpg',
            'imagens/i12.1.jpg',
            'imagens/i12.2.jpg',
            'imagens/i12.3.jpg'
        ],
        'modelos' => ['iPhone 12', 'iPhone 12 Pro Max'],
        'armazenamento' => ['64GB', '128GB', '256GB'],
        'destaque_familia' => ['iphone14', 'iphone11', 'iphone13']
    ],
    'iphone13' => [
        'titulo' => 'Apple iPhone 13',
        'subtitulo' => 'iPhone 13 e 13 Pro Max',
        'preco_base' => 3799.90,
        'parcelas' => 12,
        'imagens' => [
            'imagens/ip13.2.jpg',
            'imagens/i13.1.jpg',
            'imagens/i13.2.jpg',
            'imagens/i13.3.jpg'
        ],
        'modelos' => ['iPhone 13', 'iPhone 13 Pro Max'],
        'armazenamento' => ['128GB'], 
        'destaque_familia' => ['iphone11', 'iphone12', 'iphone14']
    ],
    'iphone14' => [
        'titulo' => 'Apple iPhone 14',
        'subtitulo' => 'iPhone 14 e 14 Pro Max',
        'preco_base' => 4150.00,
        'parcelas' => 12,
        'imagens' => [
            'imagens/i14.jpg',
            'imagens/i14.5.jpg',
            'imagens/i14.2.jpg',
            'imagens/i14.3.jpg',
            'imagens/i14.4.jpg'
        ],
        'modelos' => ['iPhone 14', 'iPhone 14 Pro Max'],
        'armazenamento' => ['128GB', '256GB'],
        'destaque_familia' => ['iphone12', 'iphone11', 'iphone13']
    ],
    'iphone15' => [
        'titulo' => 'Apple iPhone 15',
        'subtitulo' => 'Todos os modelos',
        'preco_base' => 0, 
        'texto_alternativo_preco' => 'EM BREVE',
        'parcelas' => 12,
        'imagens' => [
            'imagens/i15.3.jpg',
            'imagens/i15.1.jpg',
            'imagens/i15.jpg',
            'imagens/i15.4.jpg',
            'imagens/i15.2.jpg'
        ],
        'modelos' => ['iPhone 15', 'iPhone 15 Plus', 'iPhone 15 Pro', 'iPhone 15 Pro Max'],
        'armazenamento' => ['128GB', '256GB', '512GB', '1TB'],
        'destaque_familia' => ['iphone14', 'iphone13', 'iphone12']
    ]
];
?>