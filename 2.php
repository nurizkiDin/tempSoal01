<?php
function pisahGenapGanjil($maks) {
    $arrayTampung = [];
    $genap = [];
    $ganjil = [];
    
    for($i=0; $i < $maks; $i++) {
        $arrayTampung[$i] = (int)readline("Input ".$i." : ");
    }

    for($i=0; $i < sizeof($arrayTampung); $i++) {
        if($arrayTampung[$i]%2 == 0) {
            $genap[] = $arrayTampung[$i];
        }
        if($arrayTampung[$i]%2 != 0) {
            $ganjil[] = $arrayTampung[$i];
        }
    }

    echo "Array : ".json_encode($arrayTampung)."\r\n";
    echo "Genap : ".json_encode($genap)."\r\n";
    echo "Ganjil : ".json_encode($ganjil)."\r\n";
}

$maks = (int)readline("Maks Array : ");
pisahGenapGanjil($maks);