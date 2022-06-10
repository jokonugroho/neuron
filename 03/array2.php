<?php

$kendaraan  = ['motor', 'mobil', 'sepeda'];

if(in_array('mobil', $kendaraan)){
    echo 'ada';
}else{
    echo 'tidak ada';
}


if(array_intersect(['kapal', 'mobil'], $kendaraan)){
    echo 'ada';
}else{
    echo 'tidak ada';
}

//menggabungkan 2 array
$kendaran2 = ['pesawat', 'kapal'];
$mergeArray = array_merge($kendaraan, $kendaran2);

print_r($mergeArray);


// mencari key pada assosiative array
$smartphone = [
    'ram'=>'4GB',
    'os'=>'Androi 10'
];

if(key_exists('rams', $smartphone)){
    echo 'ada';
}else{
    echo 'tidak ada';
}


?>