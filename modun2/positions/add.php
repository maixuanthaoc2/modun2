<?php


include '../Sdatabase/database.php';
// 


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<div class="container">
<form action="" method="POST">
<!-- <label for="fname">TEN:</label><br> -->
    <!-- MÃ QUỐC GIA: <input type="text" name="MA_QUOC_GIA " class="form-control" > <br> -->
    TÊN VỊ TRÍ: <input type="text" name="TEN_VI_TRI"  class="form-control"  > <br>
    HÌNH ẢNH: <input type="text" name="HINH_ANH" class="form-control"  > <br>
    GIỚI THIỆU: <input type="text" name="GIOI_THIEU" class="form-control"  > <br>
    
    
    </table>
    <input type="submit" value="Luu " class="btn btn-primary" name="luu">

</form>
<?php
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    // echo '<pre>';
    // print_r( $_REQUEST );
    // echo '</pre>';

    /*
    if( isset( $_REQUEST['luu_1'] ) ){
        //luu_1
    }

    if( isset( $_REQUEST['luu_2'] ) ){
        //luu_2
    }
    */

    // $MA_VI_TRI  = $_REQUEST['id'];
    $TEN_VI_TRI = $_REQUEST['TEN_VI_TRI'];
    $HINH_ANH = $_REQUEST['HINH_ANH'];
    $GIOI_THIEU = $_REQUEST['GIOI_THIEU'];
    
    

    $sql = "INSERT INTO  positions,
            VALUES (NULL,'$TEN_VI_TRI','$HINH_ANH','$GIOI_THIEU' )
            
    ";
     
    //  echo '<pre>';
    //  print_r($sql);
    //  die;
    
     $conn->exec($sql);
    // $stmt->rowCount($sql);

    //chuyen huong ve trang chinh
    header( "Location: index.php" );
 }   
?>
</div>
 



 
  