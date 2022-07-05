<?php

include_once '../Sdatabase/database.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM positions WHERE MA_VI_TRI  = $id";

 //thuc hien truy van
 $conn->exec($sql);

 //chuyen huong ve trang chinh
 header( "Location: index.php" );?>
