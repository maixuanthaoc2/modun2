    <?php
include '../Sdatabase/database.php';

//TAT CA QUOC GIA
$sql ="SELECT * FROM `countries`";
$stmt = $conn->query($sql);
$quocgias = $stmt->fetchAll();
// echo '<pre>';
//     print_r( $quocgias );
//     echo '</pre>';

//TAT CA VI TRI
$sql = "SELECT * FROM `positions`";
$stmt = $conn->query($sql);
$vitris = $stmt->fetchAll();
// echo '<pre>';
//     print_r( $vitris );
//     echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo '<pre>';
    // print_r( $_REQUEST );
    // echo '</pre>';

    $SO_AO = $_REQUEST['SO_AO'];
    $VI_TRI  = $_REQUEST['VI_TRI'];
    $QUOC_GIA   = $_REQUEST['QUOC_GIA'];
    $TEN_CAU_THU  = $_REQUEST['TEN_CAU_THU'];
    $TINH_TRANG  = $_REQUEST['TINH_TRANG'];
    $HINH_ANH  = $_REQUEST['HINH_ANH'];
    $GIOI_THIEU  = $_REQUEST['GIOI_THIEU'];
    $MA_GIAI  = $_REQUEST['MA_GIAI'];

    $sql = "INSERT INTO  players
        VALUES (NULL,'$SO_AO','$VI_TRI','$QUOC_GIA','$TEN_CAU_THU','$TINH_TRANG',
        '$HINH_ANH','$GIOI_THIEU','$MA_GIAI' )";

    $conn->exec($sql);
    //chuyen huong ve trang chinh
    header("Location: index.php");
}
?>

    <?php
include '../../modun2/layout/header.php';
// include './layout/sidebar.php';
include '../../modun2/layout/sidebar.php';

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<div class="container">
    <form action="" method="POST">
        <!-- <label for="fname">TEN:</label><br> -->
        <!-- MÃ QUỐC GIA: <input type="text" name="MA_QUOC_GIA " class="form-control" > <br> -->
        SỐ ÁO: <input type="text" name="SO_AO" class="form-control"> <br>
        VỊ TRÍ:
        <select name="VI_TRI" class="form-control">
        <?php foreach( $vitris as $vitri  ): ?>    
            <option value="<?php echo $vitri['MA_VI_TRI'] ?>"><?php echo $vitri['TEN_VI_TRI'] ?> </option>
        <?php endforeach;?>
          
        </select>
        <br>
        QUỐC GIA:
        <select name="QUOC_GIA" class="form-control">
        <?php foreach( $quocgias as $quocgia  ): ?>    
            <option value="<?php echo $quocgia['MA_QUOC_GIA'] ?>"><?php echo $quocgia['TEN_QUOC_GIA'] ?> </option>
        <?php endforeach;?>
        </select>
        TÊN: 
        <textarea name="TEN_CAU_THU" class="form-control"   ></textarea>
        TÌNH TRẠNG: <input type="text" name="TINH_TRANG" class="form-control"> <br>
        HÌNH ẢNH: <input type="text" name="HINH_ANH" class="form-control"> <br>
        GIỚI THIỆU: <input type="text" name="GIOI_THIEU" class="form-control"> <br>


        </table>
        <input type="submit" value="Luu 2" class="btn btn-primary" name="luu_2">

    </form>

</div>
<?php include '../../modun2/layout/footer.php'; ?>