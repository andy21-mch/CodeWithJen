<?php

/**
 * Checks a string is a polyndrome ( I.E: the string is same as its reversed )
 * @param string $string: the string to be checked
 * @return bool
 */
function isPolyndrome($string)
{
    return strrev($string) === $string;
}