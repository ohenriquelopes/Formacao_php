<?php

// rsort é de forma decrescente

$notas = [
    'Ana' => 10,
    'Joao' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6
];

rsort($notas); // ele redefine o indice do array tbm
asort($notas); // ele mantem as chaves(indices)
arsort($notas); // uniao do rsort com asort
ksort($notas); // ordena pela chave e nao pelo valor, em ordem alfabetica
krsort($notas); // ordena pela chave e nao pelo valor, em ordem alfabetica decrescente
var_dump($notas);


is_array($notas); // verifica se e um array

array_is_list($notas);// se for array numerico (todas suas chaves forem numeros), 

var_dump(array_key_exists('Vincius', $notas)); // retorna bool
var_dump(isset($notas['Vinicius'])); // retorna se existe o valor no array e ele nao é nulo

//retorna se alguem possui esse valor no array
var_dump(in_array(10, $notas));

//array_key_existis = verifica se a chave existe
// in_array = verifica se o valor existe
// isset = verifica se a chave existe e nao e nulo

echo array_search(10, $notas); // busca quem tirou 10 no array

