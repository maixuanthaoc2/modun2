<?php

include '../../modun2/layout/header.php';
// include './layout/sidebar.php';
include '../../modun2/layout/sidebar.php';

include_once '../Sdatabase/database.php';


$sql = "SELECT * FROM giai_dau";


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
            <th>MÃ GIẢI</th>
            <th>TÊN GIẢI</th>
            <th>LOGO</th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        
        <?php foreach( $rows as $key => $row ): ?>
            <tr>
                <td><?php echo $row->MA_GIAI ; ?></td>
                <td><?php echo $row->TEN_GIAI ?></td>
                <td><img src="<?php echo $row->LOGO; ?>" style="width: 200px;hight: 400px;"></td>
                
                
                <td>
                    <a href="show.php?id=<?php echo $row->id ; ?>" class="btn btn-primary">Xem</a> | 
                    <a href="edit.php?id=<?php echo $row->id ; ?>" class="btn btn-warning">Sua</a> | 
                    <a href="delete.php?id=<?php echo $row->id ; ?>" class="btn btn-danger">Xoa</a>|    
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
<?php

?>
