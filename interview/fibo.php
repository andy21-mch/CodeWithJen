<?php 

function fibo($n){

    $fib = [0,1];

    for ($i = 2; $i <= $n; $i++){
        array_push($fib, $fib[$i - 1] + $fib[$i - 2]);
    }

    return $fib;
}
print_r(fibo(10));
