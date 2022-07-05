<?php
include '../../modun2/layout/header.php';
// include './layout/sidebar.php';
include '../../modun2/layout/sidebar.php';
include_once '../Sdatabase/database.php';
//  echo '<pre>';
//  print_r( $_REQUEST );
//  echo '</pre>';

$id = $_REQUEST['id'];

// $sql = "SELECT * FROM `players` WHERE MA_CAU_THU  = $id ";
$sql ="SELECT players.*, positions.TEN_VI_TRI,positions.HINH_ANH as HINH_ANH_VI_TRI,positions.GIOI_THIEU 
         AS GIOI_THIEU_VI_TRI, countries.TEN_QUOC_GIA,countries.QUOC_KY 
        --  AS TEN_GIAI_DAU, giai_dau.MA_GIAI_DAU,giai_dau.TEN_GIAI 
         FROM `players` 
         JOIN positions ON players.`VI_TRI`= positions.MA_VI_TRI 
         JOIN countries ON players.QUOC_GIA = countries.MA_QUOC_GIA;
         JOIN giai_dau ON players.MA_GIAI = giai_dau.MA_GIAI;";
    



//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);

//fetch se tra ve duy nhất 1 ket qua
$row = $stmt->fetch();

//  echo '<pre>';
//  print_r( $row );
//  echo '</pre>';

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<div class="container">

<table class="table" border="1">
    <tr>
        <td> SỐ ÁO</td>
        <td> <?php echo $row->SO_AO  ;?> </td>
    </tr>
    <tr>
        <td> GIOI THIEU </td>
        <td>   <?php  echo $row->GIOI_THIEU_VI_TRI;?></td>
    </tr>
    <tr>
        <td> HÌNH ẢNH </td>
        <td> <img src="<?php echo $row->TEN_GIAI_DAU; ?>" style="width: 50px;hight: 20px;"> </td>
    </tr>
  
    <tr>
        <td> GIẢI ĐẤU TỪNG ĐẤU</td>
        <td>   <?php  echo $row->TEN_GIAI;?></td>
    </tr>
    

</table>
</div>       
<?php include '../../modun2/layout/footer.php';?>
