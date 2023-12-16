<?php

/**
 * Missing
 * @param array $array:
 * @return int|null $missing:
 */
function Missing($array):  float|int|null
{
   $n = count($array) + 1 ;
   $expectedSum = ($n * ($n + 1)) / 2;
   $actual = array_sum($array);
   return $expectedSum - $actual;
}

echo missing([1,2, 3, 9]);