<?php

include 'functions.php';

$person = [
    "name" => "Jen",
    "city" => "LA",
    "age" => 23
];

$users = [
    [
        "name" => "Jen",
        "city" => "LA",
        "age" => 23
    ],
    [
        "name" => "Andy",
        "city" => "LA",
        "age" => 23
    ],
];


// echo $person["name"];

// foreach ($users as $user) {
//     echo $user["name"] . "<br>";
// }


// for ($i = 0; $i < count($colors); $i++) {
//     echo $colors[$i] . "<br>";
// }


$multiDiment = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];


// loop through and display all values

foreach($multiDiment as $row){
    foreach($row as $item){
        echo $item . "<br>";
    }
}



// 1 SendEmail 

// email, body,  
// send email

function sendEmail($email,$subject, $body){
    $users = getUsers();
    mail($email, $subject, $body);
}

function getUsers(){
    $sql = "SELECT * FROM users";
    $users = User::all();
    return $users;
}
