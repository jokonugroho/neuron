<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>format string dan integer</title>
</head>
<body>
    <?php
        $jumlah = 100000000;

        function rupiah($jumlah){
            return number_format($jumlah, 0, ',', '.');
        }

        echo rupiah($jumlah);

        echo '<br>';

        $string ="heLLo woRld";
        // change to uppercase
        echo strtoupper($string);

        /// change to lowercase
        echo '<br>';
        echo strtolower($string);
        echo '<br>';
        echo substr($string, 0, 3);
    ?>
</body>
</html>