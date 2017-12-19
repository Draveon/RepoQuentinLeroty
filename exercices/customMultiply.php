<?php

function multiply($a, $b) {
    $result = 0;

    for($i = 0; $i < $a; $i++) {
        $result += $b;
    }

    return $result;
}

$a = multiply(2, 2);

var_dump($a);

$b = multiply(2, 3);

var_dump($b);