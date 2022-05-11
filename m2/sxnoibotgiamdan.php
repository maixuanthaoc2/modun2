<?php

$mang = array(1,5,9,2,4,9);

$sophantu =6; // co the dung ham $sophantu = count($mang)
// sap xep mang
for($i = 0 ; $i < ($sophantu - 1); $i++)
{
    for ($j =$i +1 ; $j <$sophantu; $j++) // lap cac phan tu $i be hon phan tu phia sau
{
    if ($mang[$i] < $mang[$i] )// neu phan tu $i be hon phan tu phia sau
{
    // hoan vi
    $tmp = $mang[$i];
    $mang[$j] = $mang[$i];
    $mang[$i] = $tmp;
}
}
}
// hien thi cac phan tu cua mang da sap xep.
for ($i =0 ; $i <$sophantu; $i++){
    echo $mang[$i] ;
}