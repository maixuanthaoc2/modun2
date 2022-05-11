<?php

include_once 'sobichia.php';

function divide($numerator, $denominator): float|int
{
    if ($denominator === 0) {
        throw new sobichiaException();
    }
    return $numerator / $denominator;
}

try {
    $result = divide(100, 5);
    echo $result;
    $result = divide(100, 0);
    echo $result;
} catch (sobichiaException $e) {
    echo 'Có lỗi xảy ra: ' . $e;
}