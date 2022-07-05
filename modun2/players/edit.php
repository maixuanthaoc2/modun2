<?php


include_once '../Sdatabase/database.php';


$id = $_REQUEST['id'];

$sql = "SELECT * FROM giai_dau WHERE id = $id ";

$stmt = $conn->query($sql);

$stmt->setFetchMode(PDO::FETCH_OBJ);

$row = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $SO_AO = $_REQUEST['SO_AO'];
    $VI_TRI  = $_REQUEST['VI_TRI'];
    $QUOC_GIA   = $_REQUEST['QUOC_GIA'];
    $TEN_CAU_THU  = $_REQUEST['TEN_CAU_THU'];
    $TINH_TRANG  = $_REQUEST['TINH_TRANG'];
    $HINH_ANH  = $_REQUEST['HINH_ANH'];
    $GIOI_THIEU  = $_REQUEST['GIOI_THIEU'];
    $MA_GIAI  = $_REQUEST['MA_GIAI'];


    $sql = "UPDATE players
            SET 
            SO_AO = '$SO_AO',
            VI_TRI = '$VI_TRI',
            QUOC_GIA = '$QUOC_GIA'
            TEN_CAU_THU = '$TEN_CAU_THU'
            TINH_TRANG = '$TINH_TRANG'
            HINH_ANH = '$HINH_ANH'
            GIOI_THIEU = '$GIOI_THIEU'
            MA_GIAI = '$MA_GIAI'
            
                
                
            WHERE id  = '$MA_CAU_THU ' 
    ";

 
    $conn->exec($sql);

  
    header("Location: index.php");
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<div class="container">
    <form action="" method="post">
        MÃ CẦU THỦ: <input type="text" name="MA_CAU_THU " class="form-control" > <br>
        SỐ ÁO: <input type="text" name="SO_AO" class="form-control" > <br>
        VI TRÍ: <input type="text" name="VI_TRI " class="form-control" > <br>
        QUỐC GIA: <input type="text" name="QUOC_GIA " class="form-control" > <br>
        TÊN CẦU THỦ: <input type="text" name="TEN_CAU_THU" class="form-control" > <br>
        TÌNH TRẠNG: <input type="text" name="TINH_TRANG" class="form-control" > <br>
        HÌNH ẢNH: <input type="text" name="HINH_ANH" class="form-control" > <br>
        GIỚI THIỆU: <input type="text" name="GIOI_THIEU" class="form-control" > <br>
        MÃ GIẢI: <input type="text" name="MA_GIAI" class="form-control" > <br>
        

        </table>
        <input type="submit" value="Luu 1" class="btn btn-primary" name="luu_1">
    </form>
</div>
<?php

?>