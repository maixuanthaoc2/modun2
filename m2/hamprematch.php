<?php
// tra ve toan bo duoc so sanh khop
$y = 'saluy@gmail123.com';
$x = '/^[a-z]+\@gmail+[0-9]+.com/';
if (preg_match($x, $y)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}



?>


<?php
// Sử dụng hàm pre_split 
//để chia nhỏ chuỗi thành mảng chứa các chuỗi con
$ip = "192.168.1.1";
$iparr = preg_split("/\./", $ip);
echo '<pre>';
print_r($iparr);
// print "$iparr[1] <br />";
// print "$iparr[2] <br />";
// print "$iparr[3] <br />";




//  tìm kiếm và thay thế một chuỗi nào đó khớp 
//với đoạn Regular Expression truyền vào
$str = "Em chua 18 abc 29 abc 20";

$str = preg_replace("/[0-9]+/", "VN", $str);
print $str;

