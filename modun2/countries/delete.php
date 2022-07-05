<?php


include_once '../Sdatabase/database.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM countries WHERE MA_QUOC_GIA  = $id";

 //thuc hien truy van
 $conn->exec($sql);

 //chuyen huong ve trang chinh
 header( "Location: index.php" );?>

