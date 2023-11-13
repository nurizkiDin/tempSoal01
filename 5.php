<?php
$arr1 = array(23, 14, 6, 9, 10, 11, 2000, 230);
$x = (string)readline("Angka 1 : ");
$y = (string)readline("Angka 2 : ");

echo json_encode($arr1)."\r\n";
echo $x." + ".$y."\r\n";

function cariJumlahDuabil($x, $y, $arr1) {
    $hasilJum = $x + $y;
    foreach($arr1 as $key=>$a) {
        if($hasilJum == $a) {
            return $key;
        }
    }

    return "Not Found";
}

echo cariJumlahDuabil($x, $y, $arr1);