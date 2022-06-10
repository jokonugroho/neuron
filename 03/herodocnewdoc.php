<?php
$pesanKonfirmasi = "Selamat anda beruntung sekali
berhak mendapatkan hadiah";
echo $pesanKonfirmasi;

echo "\n";

$name = "joko";
/// hero doc
$pesan = <<<end
Selamat $name, anda beruntung sekali
berhak mendapatkan PS5
silahkan transfer dulu untuk biaya ongkos kirim
end;

echo $pesan;
echo "\n\n";

// new doc
$pesan1 = <<<'end'
Selamat $name, anda beruntung sekali
berhak mendapatkan PS5
silahkan transfer dulu untuk biaya ongkos kirim
end;
echo $pesan1;
?>