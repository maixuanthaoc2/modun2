<?php

include 'db.php';
$sql = 'select * from loaisach';
$stm =  $conn -> query($sql);
$stm -> setFetchMode(PDO::FETCH_OBJ);
$rows = $stm -> fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        
    <table>
        <th>maloaisach</th>
        <th>loaisach</th>
        <?php foreach( $rows as $key => $row ): ?>
            <tr>
                <td><?php echo $row->MA_LOAISACH; ?></td>
                <td><?php echo $row->LOAISACH; ?></td>
                
                <td>
                    <a href="edit.php?id=<?php echo $row->MA_LOAISACH?>">Sua</a> | 
                    <a href="delete.php?id=<?php echo $row->MA_LOAISACH?>">Xoa</a> 
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    <a href="add.php">Them</a>

    </form>
</body>
</html>