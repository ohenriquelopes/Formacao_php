<?php

$csv = ',Vinicius Dias,24,';
$numero = '24';


echo trim($csv, '.,') . PHP_EOL; // apara os caracteres das pontas
echo ltrim($csv, '.,') . PHP_EOL;
echo rtrim($csv, '.,') . PHP_EOL;



