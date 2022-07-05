<?php
include '../../modun2/layout/header.php';
// include './layout/sidebar.php';
include '../../modun2/layout/sidebar.php';

include_once '../Sdatabase/database.php';

//cau truy van
$sql = "SELECT * FROM `positions`";

//truyen cau truy van vao
$stmt = $conn->query($sql);

//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_OBJ);

//fetchALL se tra ve du lieu nhieu hon 1 ket qua
$rows = $stmt->fetchAll();

// echo '<pre>';
// print_r($rows);
// die();
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
            <th>MÃ VỊ TRÍ</th>
            <th>TÊN VỊ TRÍ</th>
            <th>HÌNH ẢNH</th>
            <th>GIỚI THIỆU</th>
        </tr>
    </thead>

    <tbody>
        
        <?php foreach( $rows as $key => $row ): ?>
            <tr>
                <td><?php echo $row->MA_VI_TRI  ; ?></td>
                <td><?php echo $row->TEN_VI_TRI; ?></td>
                <td>
                <img src="<?php echo $row->HINH_ANH; ?>" style="width: 100px;hight: 200px;">
                <td>  <a href="<?php echo $row->GIOI_THIEU; ?>"></a> </td>


                </td>
                
                <td>
                    
                    <a href="show.php?id=<?php echo $row->MA_VI_TRI ; ?>" class="btn btn-primary">Xem</a> | 
                    <a href="edit.php?id=<?php echo $row->MA_VI_TRI ; ?>" class="btn btn-warning">Sua</a> | 
                    <a href="delete.php?id=<?php echo $row->MA_VI_TRI ; ?>" class="btn btn-danger">Xoa</a>|
                    
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<?php include '../../modun2/layout/footer.php';?>

