<?php

$nome = 'Henrique Lopes';


$eDaMinhaFamilia = str_contains($nome, 'Lopes');

if ($eDaMinhaFamilia) {
    echo "$nome e da mnha Familia" . PHP_EOL;
} else {
    echo "$nome nao é da minha familia" . PHP_EOL;
}