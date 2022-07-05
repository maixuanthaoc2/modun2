<?php


include_once '../Sdatabase/database.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM giai_dau WHERE id = $id";

 
 $conn->exec($sql);

 header( "Location: index.php" );?>

