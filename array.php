<?php

// Tableaux indexés
//$t = array("elem1", "elem2", "elem3");
$t = [];

$t[] = "elem1";
$t[] = "elem2";
$t[] = "elem3";

//echo $t[0] . PHP_EOL;
//echo $t[1];

//var_dump($t);
//var_dump($t[0]);


$user = array(
    "firstname" => "John",
    "lastname" => "doe"
);

$users = array();

$users[] = $user;

$users[] = array(
    "firstname" => "Jane",
    "lastname" => "die"
);

$users[] = array(
    "firstname" => "Bob",
    "lastname" => "dylan"
);

//var_dump($users);

//for($i = 0; $i < count($users); $i++) {
//    var_dump("Utilisateur $i : ");
//    var_dump($users[$i]);
//}

//foreach ($users as $index => $user) {
//    var_dump($index);
//    var_dump($user);
//}


//foreach ($users[0] as $index => $value) {
//    var_dump("$index => $value");
//}

//foreach ($users as $index => $user) {
//    foreach ($user as $id => $value) {
//        var_dump("$index => $id => $value");
//    }
//}


$array = array(
    "key1" => "value1",
    "key2" => "value2"
);

$array2 = array(
    "key1" => "value1"
);


var_dump($array["key2"]);

if(array_key_exists("key2", $array2)) {
    var_dump($array2["key2"]);
} else {
    var_dump("j'affiche autre chose");
}





