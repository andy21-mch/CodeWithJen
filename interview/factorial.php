<?php

/**
 * returns the factorial of a number
 * @param int $num: the number whoes fact is to be checked
 * @return int
 */
function factor($num)
{

    if ($num == 1 || $num == 0) {
        return 1;
    }

    $fact = factor($num - 1) * $num;

    return $fact;
}

echo factor(10);