<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mencari kata dalam kalimat dengan php</title>
</head>
<body>
<?php 
    $string = "terima kasih saudara, selamat anda sudah menyelesaikan training ini";
    $keyword = "selamat siang";

    if(preg_match("/$keyword/i", $string)){
        echo "kata : ".$keyword." ditemukan";
    }else{
        echo "kata : ".$keyword." tidak ditemukan";
    }

?>
</body>
</html>
