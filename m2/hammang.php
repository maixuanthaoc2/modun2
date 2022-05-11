<?php
class person{
    public $name;
    function setName($newName){
        $this ->name = $newName;
    }
    function getName(){
        return $this ->name  ;
    }
}
//Thông tin truyền tới một hàm thông qua các tham số
//Tham số được sử dụng như là một biến trong hàm.
function familyName($fname) {
    echo " mai xuan $fname.<br>";
}

familyName("de");
familyName("thao");
familyName("khoa");
familyName("lan");
familyName("tam");
// ham
function add_five(&$value) {
    $value += 5;
}

$num = 2;
add_five($num);
echo $num 
//hàm với 2 tham số
// function familyName($fname, $year) {
//     echo " mai xuan $fname. sinh nam $year <br>";
// }

// familyName("de", "1975");
// familyName("tam", "1978");
// familyName("lan", "1983");
//giá trị tham số mặc định
// function setHeight($height = 50) {
//     echo "The height is : $height <br>";
// }

// setHeight(350);
// setHeight(); /* sử dụng giá trị mặc định 50 */
// setHeight(135);
// setHeight(80);
//giá trị trả về của hàm
// function sum($x, $y) {
//     return $x + $y;
// }

// echo "5 + 10 = " . sum(5, 10) . "<br>";
// echo "7 + 13 = " . sum(7, 13) . "<br>";
// echo "2 + 4 = " . sum(2, 4);
//truyền đối số bằng tham chiếu

?>
