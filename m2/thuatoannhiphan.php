<?php
    $arr = [1,2,3,4,5,6,7,8];
    function searchNumber($array, $x){
        $left = 0;
        $right =count($array) -1;
        while($left <= $right){
            $mid = ceil(($left + $right)/2);    //ceil lam tron tren
            if($array[$mid]== $x){
                return $mid;
            }else if($x > $array[$mid]){
                $left = $mid + 1;
            }else if($x < $array[$mid]){ 
                $right = $mid -1;
            }
        }
        return -1;
    }
    $x = 9;
    if(searchNumber($arr, $x)!=-1){
        echo 'phan tu' . $x . 'ton tai trong mang';
    }else{
        echo 'phan tu ' . $x . 'khong ton tai trong mang';
    }
 
