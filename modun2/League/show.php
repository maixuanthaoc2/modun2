<?php

include_once '../Sdatabase/database.php';


$id = $_REQUEST['id'];

$sql = "SELECT * FROM  giai_dau WHERE id  = $id ";


$stmt = $conn->query($sql);


$stmt->setFetchMode(PDO::FETCH_OBJ);


$row = $stmt->fetch();



?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<div class="container">

<table class="table" border="1">
    <tr>
        <td> MÃ GIẢI </td>
        <td> <?php echo $row->MA_GIAI ;?> </td>
    </tr>
    <tr>
        <td> TÊN GIẢI </td>
        <td>  <?php echo $row->TEN_GIAI;?> </td>
    </tr>
    <tr>
        <td> LOGO </td>
        <td><img src="<?php echo $row->LOGO; ?>" style="width: 200px;hight: 400px;"></td>

    </tr>
   

</table>
</div>       
<?php 

?>
