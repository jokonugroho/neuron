<?php
namespace neuron;

include 'laporanBulanan.php';

class BukuHadir {
    function listKehadiran()
    {
        $kehadiran = [
            ['tanggal'=>'2022-06-23', 'status_kehadiran'=>'hadir'],
            ['tanggal'=>'2022-06-24', 'status_kehadiran'=>'hadir']
        ];
        return $kehadiran;
    }

    function displayLaporanBulanan(){
        $objLaporan = new \joko\LaporanBulanan();
        return $objLaporan->getLaporanBulanan();
    }


}
?>