<?php
    session_start();
    if(isset($_POST['csrf'])){
        if($_SESSION['csrf'] == $_POST['csrf']){
            // do something
            $norek = $_POST['nomor_rekening'];
            $jml = $_POST['jumlah_transfer'];
        
            echo $norek;
            echo $jml;
        }else{
            echo "CSRF Token Invalid";
        }
    }else{
        echo "CSRF token not set";
    }
    