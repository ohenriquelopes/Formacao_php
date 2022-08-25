<?php

$trans = ["hello" => "hi", "hi" => "hello"]; // substitui hello pro hi

echo strtr("hi all, I said hello", $trans) . PHP_EOL;

echo str_replace(['hello', 'hi'], ['hi', 'hello'], "Hi all, i said hello") . PHP_EOL;



