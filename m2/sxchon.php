<?php

function sxChon($array){
for ( $i =0 ; $i < count($array) -1 ; $i++){
    $min = $i;
    for ($j = $i +1; $j < count($array); $j++){
        if ($array[$j]<$array[$min]){
            $min = $j;
        }
    }
    $array = hoanDoi($array , $i ,$min);
}
return $array;
}
function hoanDoi($data, $left,$right)
{
    $backup = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backup;
    return $data;
}

$myArray = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo "mảng gốc :". "<br>";
echo implode(', ', $myArray) . "<br>";
echo "mảng đã sửa :" . "<br>";
echo implode(', ', sxChon($myArray));
