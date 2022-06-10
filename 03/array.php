<?php

$kendaraan  = ['motor ', 'mobil ', 'sepeda '];

//menghitung jumlah item pada array
echo 'jumlat item :'.count($kendaraan);
echo "\n";
//menampilkan list array
print_r($kendaraan);

echo "\n";
$removeSpaceArray = array_map('trim', $kendaraan);
print_r($removeSpaceArray);

echo "\n";
$upperArray = array_map('strtoupper', $kendaraan);
print_r($upperArray);


function rupiah($jumlah){
    return number_format($jumlah, 0, ',', '.');
}
$rangeGaji  = [4000000, 5000000, 6000000];
$formatArray = array_map('rupiah', $rangeGaji);
print_r($formatArray);
?>