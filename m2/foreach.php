<?php
// $mang = [
//     "thao" => 30,
//     "tuan" => 25,
//     "cuong" => 30,
// ];
// foreach( $mang as $key => $value){
//     echo "$key -$value <br>";
// }
// $i = 0;
//     $sum = 0 ;
//     while($i <=100){
//         $sum += $i;
//         $i++;
//     }
//     echo "$sum";
     class Ngaythangnam{
    public static function getNgayThangNam($thang,$nam){
        switch($thang){
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:

                return 31 ;
            case 4:
            case 6:
            case 9:
            case 11:
                return 30;

        }
    }
}


// tach phuong thuc;\
 

?>