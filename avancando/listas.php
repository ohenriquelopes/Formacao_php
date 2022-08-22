<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

/*

for ($i = 0; $i < count($idadeList) ; $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
 */

list($idadeVinicius, $idadeJoao, $idadeMaria) = $idadeList;
// atribui o valor no array a variavel na posicao respectiva ao indice 

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

// se quiser adicionar um item no final da lista nao precisa informar o indice, ele ira adicionar no prox espaco disponivel

$idadeList[] = 20;