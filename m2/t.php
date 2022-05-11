<?php 
echo 'phuong thuc gui du lieu'.$_SERVER["REQUEST_METHOD"];
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
if($_SERVER["REQUEST_METHOD"]=='post'){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    echo 'ten nhap la '.$username;
    echo 'mat khau la'.$password;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php date_default_timezone_set('Asia/Ho_Chi_Minh') ?>
<h1> login <?php echo date('Y-M-d h:i:s'); ?> </h1>
 <form action="" method="post">
    Username:<br>
    <input type="text" name="username"  ><br>
    Password:<br>
    <input type="password" name="password" ><br><br>
    <input type="submit" value="sign in" ><br>
    </form>
</body>
</html>