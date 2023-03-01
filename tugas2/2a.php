<?php
    for($nilai_awal=1; $nilai_awal<=100; $nilai_awal++){
        if($nilai_awal %3==0 and $nilai_awal %5==0){
            echo "Salman Alfarizi <br>";
        }elseif($nilai_awal%5==0){
            echo "Salman <br>";
        }elseif($nilai_awal%5==0){
            echo "Alfarizi <br>";
        }else{
            echo "$nilai_awal <br>";
        }
    }

?>