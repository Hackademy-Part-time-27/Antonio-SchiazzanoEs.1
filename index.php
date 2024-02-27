<?php
//traccia 1 

$integer  = 10;

$float = 1.3;

$string = "ciao";

$boolean = true;

echo "Tipo di dato di integer: " . gettype($integer) . "\n";
echo "Tipo di dato di float: " . gettype($float) . "\n";
echo "Tipo di dato di string: " . gettype($string) . "\n";
echo "Tipo di dato di boolean: " . gettype($boolean) . "\n";

const INTEGER = 10;
const FLOAT = 1.3;
const STRING = "ciao";
const BOOLEAN = true;
echo " Il valore di integer é: " . INTEGER;
echo " Il valore di float é: " . FLOAT;
echo " Il valore di string é: " . STRING;
echo " Il valore di boolean é: " . BOOLEAN;

// traccia 2

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = $text2;
$text7 = "bevuto";
$text8 = "tutto";

echo $text1 . " " . $text2 . " " . $text3 . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8;

// traccia 3


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
    'oscura',
    'era',
    89,
    [
    'mezzo',
    [
    'cammin',
    'Nel',
    [
    'selva',
    'la',
    [
    'via',
    'una',
    true,
    ]
    ],
    ]
    ],
    'ritrovai',
    'per'
    ],
    'diritta'
    ];
    $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
    ]
    ];

    $frase = $words1[6][3][1][1] . ' ' . $words1[6][3][0] . ' ' . 'di ' . $words1[6][3][1][0] . ' ' . 'di ' . $words2['elemento2'] . ' ' . $words1[2] . ' ' . $words1[4] . ' ' . $words1[6][4] . ' in ' . $words1[0] . ' ' . $words1[6][3][1][2][0] . ' ' .  $words1[6][0] . ',' . $words2['elemento3'][2] . ' ' . $words1[6][3][1][2][1] . ' ' . $words1[7] . ' ' . $words1[6][3][1][2][2][0] . ' ' . $words1[6][1] . ' ' . $words2['elemento3'][1] . '.';

echo $frase

?>