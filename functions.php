<?php

$users = array();

$users[] = array(
    "firstname" => "John",
    "lastname" => "doe",
    "pays" => 'france'
);

$users[] = array(
    "firstname" => "Jane",
    "lastname" => "die",
    "pays" => 'espagne'
);

$users[] = array(
    "firstname" => "Bob",
    "lastname" => "dylan",
    "pays" => 'other'
);

//var_dump($users[0]['firstname']);
//var_dump($users[0]['lastname']);
//
//var_dump($users[1]['firstname']);
//var_dump($users[1]['lastname']);

//function getUser($users, $position = 0, $message = "Hello ") {
////    var_dump($users[$position]['firstname']);
////    var_dump($users[$position]['lastname']);
//
//    var_dump($message . $users[$position]['firstname'] . " " . $users[$position]['lastname']);
//}
//
//getUser($users, 0, "Bonjour ");
//getUser($users, 1);

function france() {
    var_dump("Je viens de France");
}

function espagne() {
    var_dump("Je viens d'Espagne");
}


foreach ($users as $user) {
//    switch ($user['pays']) {
//        case 'france':
//            france();
//            break;
//        case 'espagne':
//            espagne();
//            break;
//        default:
//            var_dump("Je sais pas d'où je viens");
//    }

    $func = $user['pays'];
    var_dump($func);

    $func();
}






