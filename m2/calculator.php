<?php
 const ADDITION = '+';
 const SUBTRACTION = '-';
 const MULTIPLICATION = '*';
 const DIVISION = '/';
 


class Calculator
{
    public function calculate($a, $b, $o)
    {
        switch ($o) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                if ($b != 0) {
                    return $a / $b;
                } else {
                    return "Can not divide by ";
                }
            default:
                return "Unsupported operation";
        }
    }
}
