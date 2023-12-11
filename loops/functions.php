<?php 


// function Greet(){
//     //body
//     return "Hello! Jenifer!";
// }




// function salute($name, $age){
//     // $age  = 100;
//     return "Hello $name, you are $age years young";
// }

// $stringSalute = salute("Jenifer", 100);


// echo $stringSalute;



/**
 * Subtract the value of $a from $b.
 *
 * @param int $a The value to subtract.
 * @param int $b The value to subtract from.
 *
 * @return int The result of subtracting $a from $b.
 */
function subtract(int $a, int $b)
{
    return $b - $a;
}


subtract(2, 5);

echo "<br>";





$grad = subtract(6, 8) / subtract(2, 5);

echo $grad;
// grad = (y2 - y1)/(x2 - x1)
