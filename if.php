<?php

$age = 0;

/*

0 - 19 Teenager;
20 - 30 Adult;
31++ - Elderly;

*/

if ($age > 0 && $age <= 19) {
    echo "Yay!, you are a teen! <br>";
} else if ($age > 19 && $age <= 30) {
    echo "Ouch!, You are getting old <br>";
} else if ($age > 30) {
    echo "Wehhh!, you are old! <br>";
} else {
    echo "invalid <br>";
}