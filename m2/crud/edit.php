<?php
    //ket noi CSDL
    include 'db.php';
    include 'index.php';

    // //lay du lieu tren url
    // $id = 101;

    // //lay du lieu
    // $TENHANG    = 'Khóa học Bootcamp';
    
    // //cau query
    // $sql = "UPDATE MATHANG set TENHANG='$TENHANG' where MAHANG=$id";

    // //check sql
    // //var_dump($sql);

    //  //thuc hien truy van
    // $conn->exec($sql);
    $id=$_GET['id'];
    if(isset($_POST['sua'])){
        $maloaisach = $_POST['maloaisach'];
        $loaisach = $_POST['loaisach'];
        $sql = "UPDATE loaisach SET MA_LOAISACH=$maloaisach, LOAISACH='$loaisach' WHERE MA_LOAISACH =$id";
        $conn -> exec($sql);
        header('location:index.php');
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
        <form method="POST">
        ma loai sach<input type="text" name="maloaisach" id="">
        loai sach<input type="text" name="loaisach" id="">
        <input type="submit" name="sua" id="">



        </form>
    </body>
    </html>