<?php
// include '../../modun2/layout/header.php';
// include './layout/sidebar.php';
// include '../../modun2/layout/sidebar.php';

include_once '../Sdatabase/database.php';
//  echo '<pre>';
//  print_r( $_REQUEST );
//  echo '</pre>';

 $id = $_REQUEST['id'];

 $sql = "SELECT * FROM `positions` WHERE MA_VI_TRI   = $id ";

 //truyen cau truy van vao
 $stmt = $conn->query($sql);
 
 //Thiết lập kiểu dữ liệu trả về
 $stmt->setFetchMode(PDO::FETCH_OBJ);
 
 //fetch se tra ve duy nhất 1 ket qua
 $row = $stmt->fetch();

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

    $MA_VI_TRI    = $_REQUEST['id'];
    $TEN_VI_TRI = $_REQUEST['TEN_VI_TRI'];
    $HINH_ANH = $_REQUEST['HINH_ANH'];
    $GIOI_THIEU = $_REQUEST['GIOI_THIEU'];
   
   

    $sql = "UPDATE `positions` 
            SET 
            TEN_VI_TRI = '$TEN_VI_TRI',
            HINH_ANH = '$HINH_ANH',
            GIOI_THIEU = '$GIOI_THIEU'
                
                
            WHERE MA_VI_TRI  = '$MA_VI_TRI ' 
    ";

    // echo $sql;die();

    //thuc hien truy van
    $conn->exec($sql);

    //chuyen huong ve trang chinh
    header( "Location: index.php" );
 }   

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<div class="container">
<form action="" method="post">
    MÃ VỊ TRÍ: <input type="text" name="MA_VI_TRI" class="form-control" value="<?php echo $row->MA_VI_TRI; ?>"   > <br>
    VỊ TRÍ: <input type="text" name="TEN_VI_TRI" class="form-control" value="<?php echo $row->TEN_VI_TRI; ?>"   > <br>
    HÌNH ẢNH: <input type="text" name="HINH_ANH" class="form-control" value="<?php echo $row->HINH_ANH; ?>"   > <br>
    GIỚI THIỆU: <input type="text" name="GIOI_THIEU" class="form-control" value="<?php echo $row->GIOI_THIEU; ?>"   > 
    
    
    </table>
    <input type="submit" value="Luu 1" class="btn btn-primary" name="luu_1">
</form>
</div>
<?php 
// include '../../modun2/layout/footer.php';
?>
