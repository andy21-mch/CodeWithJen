<?php

// echo "<h1>Hello world</h1>";

// print_r("<h1>Hello world</h1>");
// // var_dump();
// // print 

// $name = "Andrew";
// $my_name;
// $myName;


$num1 = 2; // assignement operatore
$num1 == 2; // comparison operatore
$num2 = 5;

// echo $num1 == $num2 ?  "True" : "False"; // tenary operations

// if( $num1 > $num2 ){

//     echo "The first number is greated the second";
// }
// else if($num1 == $num2){
//     echo "The numbers are thesame";

// }else {
//     echo "the second number is greater than the first";
// }

// switch($num1){
//     case $num1 == $num2:
//         echo "Yea";
//     case $num1 > $num2:
//         echo "No";
// }

// 10 student

// loops

/*
1 - For loop
This is a counting loop

$totalTimes = 10;
for ($i = 0; $i < $totalTimes; $i++){
    echo "Loop number: ". $i . "<br/>";
}

2 - While Loop
$totalTimes = 10;
$i = 0;
while ($i < 10 ){
    echo "Loop number: ". $i . "$name";
    $i++;
}


3 - Foreach

- indexed Array
$person = ["Andy", 30]; // single dimension, indexed array
$person[0]
$people = [
    ["Andy", 30], 
    ["Jen", 21]
]; // multidimension indexed array
$people[row][column]
$people[0][0]
echo $person[0];

- associative
simply a key-value pair

user - name, email, password, phone

$person = ["name" => "Andrew", "age"=> 30];
echo $person["name"];

$users = $db->query("select * from users")'


foreach($users as $user){
    $user['email']
}



*/
/*

! ---TEXT FILES --!

$filename = "people.txt";

$fp = file_exists($filename) ? fopen($filename, 'a+') : false;
if ($fp) {
    $content = fread($fp, filesize($filename));
    fwrite($fp, "\nAntohter line");
    var_dump($content);
}else {
    echo "No such file";
}
fclose($fp);
unlink($filename);

! --- CSV FILS ---! 

*/

$filename = "people.csv";

$fp = fopen($filename, "r");
// $data = ["Andrew", "andrewy", "alala"];
// $data = "Andrew,andrewy,alala";
fputcsv($fp, ["Andrew", "andrewy", "alala"]);

$array = [];
while($line = fgetcsv($fp)) {
    $array[] = $line;
}

var_dump($array);

unlink($filename);

fclose($fp);



