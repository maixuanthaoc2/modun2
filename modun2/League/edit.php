<?php


include_once '../Sdatabase/database.php';


$id = $_REQUEST['id'];

$sql = "SELECT * FROM giai_dau WHERE id = $id ";

$stmt = $conn->query($sql);

$stmt->setFetchMode(PDO::FETCH_OBJ);

$row = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $id = $_REQUEST['id'];
    $MA_GIAI = $_REQUEST['MA_GIAI'];
    $TEN_GIAI = $_REQUEST['TEN_GIAI'];
    $LOGO = $_REQUEST['LOGO'];



    $sql = "UPDATE giai_dau
            SET 
            MA_GIAI = '$MA_GIAI',
            TEN_GIAI = '$TEN_GIAI',
            LOGO = '$LOGO'
            
                
                
            WHERE id  = '$id' 
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
        MÃ GIẢI: <input type="text" name="MA_GIAI" class="form-control" > <br>
        TÊN GIẢI: <input type="text" name="TEN_GIAI" class="form-control" > <br>
        LOGO GIẢI: <input type="text" name="LOGO" class="form-control" > <br>
        

        </table>
        <input type="submit" value="Luu 1" class="btn btn-primary" name="luu_1">
    </form>
</div>
<?php

?>