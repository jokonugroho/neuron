<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mencari posisi karakter dalam text</title>
</head>
<body>
<?php 
    $string = "terima kasih rekan, selamat anda sudah menyelesaikan training ini";
    $keyword = ",";

    $hasil = strpos($string, $keyword);
    $hasil_akhir = $hasil+1;
    echo $keyword." berada pada posisi karakter ke-:".$hasil_akhir;
?>
</body>
</html>
