<?php

$i = 0;

while ($i < 10) {
    if($i == 3) {
        var_dump("Fin de la boucle");
        break;
    }

    var_dump("i est = à $i");

    $i++;
}