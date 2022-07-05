<?php
include '../../modun2/layout/header.php';
// include './layout/sidebar.php';
include '../../modun2/layout/sidebar.php';
include '../Sdatabase/database.php';

$sql ="SELECT players.*, positions.TEN_VI_TRI,positions.HINH_ANH as HINH_ANH_VI_TRI,positions.GIOI_THIEU 
         AS GIOI_THIEU_VI_TRI, countries.TEN_QUOC_GIA,countries.QUOC_KY 
         
         FROM `players` 
         JOIN positions ON players.`VI_TRI`= positions.MA_VI_TRI 
         JOIN countries ON players.QUOC_GIA = countries.MA_QUOC_GIA;";

// $sql ="SELECT players.*, giai_dau.MA_GIAI,giai_dau.LOGO as LO_GO_GIAI_DAU
//          FROM `players` 
//          JOIN giai_dau ON players.`MA_GIAI`= giai_dau.MA_GIAI 
//          JOIN giai_dau ON players.HINH_ANH = giai_dau.LOGO;";         
         
         

$stmt = $conn->query($sql);

$stmt->setFetchMode(PDO::FETCH_OBJ);

$rows = $stmt->fetchAll();


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<div class="container">
<a href="add.php" class="btn btn-primary" style="--clr:#ff1867"></i><span>THÊM</span><i></i></a></div>
        
<div class="container">
<table class="table" border="1">

        <tr>
            <th>MÃ CẦU THỦ</th>
            <th>SỐ ÁO</th>
            <th>VỊ TRÍ</th>
            <th>QUỐC GIA</th>
            <th>TÊN CẦU THỦ</th>
            <th>TÌNH TRẠNG</th>
            <th>HÌNH ẢNH</th>


        </tr>
    </thead>

    <tbody>
        
        <?php foreach( $rows as $key => $row ): ?>
            <tr>
                <td><?php echo $row->MA_CAU_THU  ; ?></td>
                <td><?php echo $row->SO_AO; ?></td>
                <td><?php echo $row->TEN_VI_TRI ; ?></td>
                <td><?php echo $row->TEN_QUOC_GIA ; ?></td>
                <td><?php echo $row->TEN_CAU_THU; ?></td>
                <td><?php echo $row->TINH_TRANG; ?></td>
                
                <td><img width="100" src="<?php echo $row->LO_GO_GIAI_DAU; ?>" alt=""></td>
                <td>
                <img src="<?php echo $row->QUOC_KY; ?>" style="width: 50px;hight: 20px;">
                </td>
                
                <td>
                    
                    <a href="show.php?id=<?php echo $row->MA_CAU_THU ; ?>" class="btn btn-primary">Xem</a> | 
                    <a href="delete.php?id=<?php echo $row->MA_CAU_THU ; ?>" class="btn btn-danger">Xoa</a>|
                    <a href="edit.php?id=<?php echo $row->MA_CAU_THU ; ?>" class="btn btn-danger">Sua</a>|
                    
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<?php include '../../modun2/layout/footer.php';?>


