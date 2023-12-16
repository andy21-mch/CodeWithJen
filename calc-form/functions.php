<?php
/**
 * Adds two numbers.
 *
 * @param mixed $num1 The first number.
 * @param mixed $num2 The second number.
 *
 * @return int|float The sum of $num1 and $num2.
 */
function add($num1, $num2): int|float
{
    return $num1 + $num2;
}

/**
 * Subtract 2 numbers, the second from the first.
 *
 * @param mixed $num1 The first number.
 * @param mixed $num2 The second number.
 *
 * @return int|float The difference of $num1 and $num2.
 */
function subtract($num1, $num2): int|float
{
    return $num1 - $num2;
}

/**
 * Multiply two numbers.
 *
 * @param mixed $num1 The first number.
 * @param mixed $num2 The second number.
 *
 * @return int|float The product of $num1 and $num2.
 */
function multiply($num1, $num2): int|float
{
    return $num1 * $num2;
}

/**
 * Divide two numbers.
 *
 * @param mixed $num1 The numerator.
 * @param mixed $num2 The denominator.
 *
 * @return int|float|string The result of $num1 / $num2. If $num2 is 0, returns the string "Cannot divide by zero".
 */
function divide($num1, $num2): int|float|string
{
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "Cannot divide by zero";
    }
}

/**
 * Calculate the modulus (remainder) of dividing two numbers.
 *
 * @param mixed $num1 The dividend.
 * @param mixed $num2 The divisor.
 *
 * @return int|float|string The remainder of dividing $num1 by $num2. If $num2 is 0, returns the string "Cannot perform a mode by zero".
 */
function modulus($num1, $num2): int|float|string
{
    if ($num2 != 0) {
        return $num1 % $num2;
    } else {
        return "Cannot perform a mode by zero";
    }
}

/**
 * Calculate the square root of a number.
 *
 * @param mixed $num The number for which to find the square root.
 *
 * @return float The square root of $num.
 */
function squareRoot($num): float
{
    return sqrt($num);
}

/**
 * Calculate the power of a number raised to another number.
 *
 * @param mixed $base The base number.
 * @param mixed $exponent The exponent to which the base is raised.
 *
 * @return float|int The result of $base raised to the power of $exponent.
 */
function power($base, $exponent): float|int
{
    return pow($base, $exponent);
}

/**
 * Calculate the factorial of a number.
 *
 * @param int $num The number for which to calculate the factorial.
 *
 * @return int The factorial of $num.
 */
function factorial($num): int
{
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}

/**
 * Calculate the absolute value of a number.
 *
 * @param mixed $num The number for which to calculate the absolute value.
 *
 * @return float|int The absolute value of $num.
 */
function absoluteValue($num): float|int
{
    return abs($num);
}
?>
