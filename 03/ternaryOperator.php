<?php
    $topi = 'bundar';

    if($topi == 'bundar'){
        echo 'topi saya';
    }else{
        echo 'bukan topi saya';
    }
    echo '<br />';
    
    echo $topi=='bundar'? 'topi saya' : 'bukan topi saya';
    
    $nilai= 50;
    echo '<br />';

    echo ($nilai >= 90)? 'bagus':($nilai >=80 ? 'bagus' : ($nilai > 70 ? 'biasa' : 'kureng')); 
?>