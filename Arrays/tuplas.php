<?php

$dados = ['Vinicius', 10, 24];
// list($nome, $nota, $idade) = $dados; // OU
[$nome, $nota, $idade] = $dados;


var_dump($nome, $nota, $idade);

// OU

$dados2 = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados2;

var_dump($nome, $nota, $idade);


extract($dados); // transforma o array em variaveis

compact('nota', 'idade', 'nome'); // transforma a variavel em array

