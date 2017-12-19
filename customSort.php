<?php


$array = [10, 3, 7, 5, 1];

$sorted = false;

$size = count($array);

while(!$sorted)
{
    $sorted = true;

    for($i = 0 ; $i < $size - 1 ; $i++)
    {
        if($array[$i] > $array[$i + 1])
        {
            $tmp = $array[$i];

            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $tmp;

            $sorted = false;
        }
    }

    $size--;
}

var_dump($array);

