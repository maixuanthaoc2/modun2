<?php
include '../../modun2/layout/header.php';
// include './layout/sidebar.php';
include '../../modun2/layout/sidebar.php';

include_once '../Sdatabase/database.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM players WHERE MA_CAU_THU = $id";

$conn = $conn->exec($sql);

header("location:display.php");?>
<?php include '../../modun2/layout/footer.php';?>
