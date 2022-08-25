<?php

$nome = 'Vinicíus Dias';
$email = 'ana@alura.com.br';
$senha = '123';


echo mb_strlen($senha) . PHP_EOL;
echo strlen($senha) . PHP_EOL; // mostra o numero de BYTES nao de caracteres

$posicaoDoArroba = strpos($email, '@'); // busca a posicao 

$usuario = substr($email, 0, $posicaoDoArroba);

echo $usuario . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);
echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;


$csv = 'Vinicius Dias, 24, vinicius@alura.com.br';
var_dump(explode(',', $csv)); // transforma uma string em um array


echo trim($email) . PHP_EOL; // apaga os espacos

