<?php

function areAnagrams($a, $b)
{
    $a = str_replace(' ', '', $a);
    $b = str_replace(' ', '', $b);

    $countA = array_count_values(str_split(strtolower($a)));
    $countB = array_count_values(str_split(strtolower($b)));

    return count($countA) == count($countB) && $countA == $countB ? 'True': "False";
}

echo areAnagrams('wims', 'swim');  // Output: True
