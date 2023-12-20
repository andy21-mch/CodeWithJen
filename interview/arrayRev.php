<?php

/**
 * returns a revervsed Array
 * @param array $array: the array to be reversed
 * @return array
 */
function array_rev($array)
{
    $reversed = [];
    for ($i = count($array); $i >= 0; $i--) {
        array_push($reversed, $array[$i]);
    }
    return $reversed;

    // similar to just array_reverse($array)

}

print_r(array_rev([1, 2, 4, 5, 6]));