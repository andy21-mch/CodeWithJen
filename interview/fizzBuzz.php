<?php

/**
 * FizzBuzz
 * @param int $start:
 * @param int $end:
 */
function FizzBuzz($start, $end)
{
    for ($i = $start; $i <= $end; $i++) {
        if ($i % 3 == 0) {
            echo "Fizz" . PHP_EOL;
        } elseif ($i % 5 == 0) {
            echo "Buzz" . PHP_EOL;
        } else {
            echo $i . PHP_EOL;
        }
    }
}

FizzBuzz(1, 30);