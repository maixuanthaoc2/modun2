<?php
   include 'db.php';
   $id = $_GET['id'];
   $sql = "DELETE from loaisach where 	MA_LOAISACH = $id";
   $conn -> exec($sql);
   header('location:index.php');