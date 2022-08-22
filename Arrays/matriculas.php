<?php

$alunos2021 = [
    'Vinicius',
    'Joao',
    'Ana',
    'Roberto',
    'Maria',
];


$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

$alunos2022 = array_merge($alunos2021, $novosAlunos);

$alunos2022 = $alunos2021 + $novosAlunos; // ele so adiciona ao final do primeiro array, a partir do indice antigo. Se o primeiro termina no indice 5, ele vai comecar a adicionar o 6 do segundo array

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos]; // os .. desempacota o array, e voce pode adicionar mais alguma coisa no meio, como no exemplo. E tem o mesmo efeito que o array_merge

array_push($alunos2022, 'Alice', 'Bob', 'Charlie'); // é por referencia &

array_unshift($alunos2022, 'Stephanie'); // adiciona o elemento ao inicio no array

array_shift($alunos2022); // ele remove o primeiro item do array

array_pop($alunos2022); // ele remove o ultimo item do array

$alunos2022[] = 'Luiz'; // adiciona ao final

