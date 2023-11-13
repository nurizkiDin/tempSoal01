<?php
$elem = (string)readline("Input : ");

function regexTaghtml($data) {
    $p = "/<div>|<\/div>|<span>|<\/span>|<p>|<\/p>/";
    echo preg_replace($p, "", $data);
}

regexTaghtml($elem);