<?php
// giong bai tap gtnn , gtln, tim so trong mang
$arr = [3,4,2,1,-2,5,7,9,12];

function searchNumber($number , $array){
    for($i =0 ; $i<count($array); $i++){
        if($array[$i]== $number){
            return $i;
        }
    }

    return -1;
}
$x= 56;
if(searchNumber($x, $arr)!= -1){
    echo 'phan tu '. $x . 'co ton tai';
}else{
    echo 'phan tu ' . $x. 'khong ton tai';
}