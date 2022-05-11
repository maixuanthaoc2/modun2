<?php
$arr = [1,3,4,5,6,7,8,9];
function findMin($arr) {
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
       if ($arr[$i] < $min) {
          $min = $arr[$i];
       }
    }
    return $min;
 }
 $nums = [];
for($i = 0; $i < 10; ++$i){
   $nums[$i] = rand(1, 9);
}
foreach($nums as $num) {
   echo $num . " ";
}
$minValue = findMin($nums);
echo "</br>";
echo "gi tri nho nhat la: " . $minValue;