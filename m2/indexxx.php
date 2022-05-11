<?php

include_once 'khaibaoexception.php';

function divide($numerator, $denominator): float|int
{
    if ($denominator === 0) {
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}