<?php 
echo 'phuong thuc gui du lieu '.$_SERVER['REQUEST_METHOD'];
echo'<pre>';
print_r($_REQUEST);
echo'</pre>';
//kiem tra nguoi dung da nhap gui du lieu
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    //lay gia tri cua username
    $username = $_REQUEST['username'];
    //lay gia tri cua passwordzx
    $password = $_REQUEST['password'];

    echo "<hr> ten dang nhap la". $username;
    echo "<hr> mat khau la ". $password;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" >
        ten:  <input type="text" name="username"><br>
        mat khau:<input type="password" name="password">
        <input type="submit" value="dang nhap">;
    </form>
</body>
</html>
<?php 
    // echo "thaomx";//echo
    // $name = "cuti";//string
    // print "thaohh";//print
    // $num = 6;// 
    // $arr = [13,34];//mảng
    // $class name(){};//lop
    // $function name(){};//ham
//     define ("TAM", 19);
//    echo TAM;
//    $arr = [1,2];
//    print_r($arr);//in ra mang
//    const pi2 =3,14;
//    var_dump($arr);
//    $number1 = 1;
//    $number2 = 2;
//    echo ($number1 , $number2 )
//  $name = "thaomx";
//  function call_name(){
//      echo $GLOBALS['name'];
//  }
// call_name();
// echo '<pre>';
// print_r($_SERVER['REQUEST_METHOOD']);
// echo'</pre>'
?>
