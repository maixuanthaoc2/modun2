

    <?php
    //  function kiemtra($x){
    //     if($x %2 == 0){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    // $result = kiemtra(2);
    // if($result == true ){
    //     echo "la so chan";
    // }else{
    //     echo "la so le";
    // }
    $thongtin = ['name'=>'thao','age'=>26,'sex'=>'nam'];
//    echo '<pre>';
//     // print_r($thongtin);
//     echo $thongtin['name'];
// 

// $tuoi = ["chon" => "22", "linh" => "20", "thao" => "27"];

foreach ($thongtin as $x => $x_value) {
    echo "key-" . $x . ", Value=" . $x_value;
    echo "<br>";
}

