<?php


$texto = 'Texto com qualquer coisa poxa e caramba';

//echo str_replace('poxa', '***', $texto) . PHP_EOL;

echo str_replace(
    ['poxa', 'caramba'],
    //'***',
    ['***'], // substitui o primeiro e apaga o resto
    $texto
) . PHP_EOL;



echo strtr($texto, 'poxa', '***@') . PHP_EOL; // trabalha com caracteres nao com palavras

echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL; // por palavras

