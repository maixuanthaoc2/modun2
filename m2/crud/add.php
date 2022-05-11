<?php
   include 'db.php';
   include 'index.php';
   if(isset($_POST['tailen'])){
    $maloaisach = $_POST['maloaisach'];
    $loaisach = $_POST['loaisach'];
    $sql= "INSERT INTO loaisach VALUES ($maloaisach, '$loaisach')";
    $conn->exec($sql);
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
       <form method="post">
           maloaisach <input type="text" name="maloaisach" id="">
           loaisach <input type="text" name="loaisach" id="">
           <input type="submit" name="tailen" id="">

       </form>
   </body>
   </html>