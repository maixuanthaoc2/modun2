<?php

    function finMind($arr)
    {
        $min = $arr[0];
        for ($i =1 ; $i< count($arr); ++$i){
            if($arr[$i]< $min){
                $min = $arr[$i];
            }
        }
        return $min;
    }
    $num = [-2,0,5,7,9,-5,30,100];
    foreach ($nums as $num){
        echo $num . "";
    }
    $minValue = finMind($nums);
    echo "</br>";
    echo "so nho nhat la :";
