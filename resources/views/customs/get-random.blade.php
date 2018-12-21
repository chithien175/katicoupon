<?php

// file name for download
$fileName = "export-random-number.xls";

// headers for download
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=".$fileName);
header("Pragma: no-cache");
header("Expires: 0");

for($soto=0; $soto<100; $soto++){
    $numbers = range(1, 99);

    echo "Trang ". ($soto+1) . ":\n";

    for($i=0; $i<6; $i++){
        $rand_key=array_rand($numbers,5);
        
        foreach($rand_key as $v){
            echo $numbers[$v] . "\t";
            unset($numbers[$v]);
        }
        echo "\n";
    }

    echo "\n";
}

exit;

?>