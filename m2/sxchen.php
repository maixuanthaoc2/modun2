<?php


function sxChen($myArray)
{
for ($i =0 ; $i< count($myArray); $i++){
    $val = $myArray[$i];
    $j = $i - 1;
    while( $j >= 0 && $myArray[$j] > $val){
        $myArray[$j +1] = $myArray[$j];
        $j--;
    }
    $myArray[$j + 1] = $val;
}
return $myArray;
}


$array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ', $array);
echo "<br>";
echo "\nSorted Array :\n";
print_r(sxChen($myArray));
