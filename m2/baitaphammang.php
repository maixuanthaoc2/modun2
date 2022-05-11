<?php 
// $mang = [1,4,10,8,9];
// $max = $mang[0];
// for($i =0 ; $i<count($mang) ; $i++){
//     if($mang[$i] >$max){
//         $max = $mang[$i];
//     }
// }
// echo ($max);
// $mang2 = [1,3,5,7,9];
// $num = 0;
// for($j = 0 ; $j<count($mang2) ; $j++){
//     $num += $mang2[$j];
// }
// echo ($num);
// $arr = [];
// for( $e= 0 ;$e<8;$e++){
//     $arr[$e] = $e+2;
// }print_r($arr);
$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15]
];
echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

for ($j = 0; $j < 4; $j++) {
    echo "so quang duong $j";
   
    for ($i = 0; $i < 3; $i++) {
        echo "<li>" . $cars[$j][$i] . "</li>";
    }
    echo "</ul>";
}
?>