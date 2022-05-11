<?php 
//key => value
$mang = [
    "thao" => 30,
    "tuan" => 25,
    "cuong" => 30,
];
// vongf lặp foreach
foreach( $mang as $key => $value){
    echo "$key - $value </br>";
}
//vòng lặp while
$i = 0;
    $sum = 0;
    while($i<= 100){
        $sum += $i;
        $i++;
    }
    echo $sum;
//vòng lặp do while
$i = 1;
$sum = 0;

 do{
    $i++;
    $sum += $i;
    
 }while($i<=100);
 echo $sum;
 //hàm
 

 function Name() {
     echo "Hello world!";
 }
 
 
 function NaMe() {
    echo "Hello world!";
}


function Na_me() {
    echo "Hello world!";
}



function sum($a,$b) {
    return $a +$b;
}echo sum(12,13);
function abc($ten,$tuoi){
    echo "'xinchao'+'$ten'+'$tuoi'"
}
sum('thao',26);
?>
