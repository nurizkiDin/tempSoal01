<?php

function hitungVokal() {
    $kalimat = (string)readline("Input : ");
    $cekVokal = array('a', 'A', 'i', 'I', 'u', 'U','e', 'E','o', 'O');
    $count = 0;

    for($i=0; $i < sizeof($cekVokal); $i++) {
        $count += substr_count($kalimat, $cekVokal[$i]);
    }
    echo $count;
}

hitungVokal();