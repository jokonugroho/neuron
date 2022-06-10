<?php
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL); 

    include 'bukuHadir.php';
    use neuron\BukuHadir;
    $joko = new BukuHadir();
    print_r($joko->listKehadiran()); 
    print_r($joko->displayLaporanBulanan()); 
?>