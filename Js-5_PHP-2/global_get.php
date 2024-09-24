<?php
$nama = @$_GET['nama']; // Use @ to suppress notices if the key is not set
$usia = @$_GET['usia']; // Use @ to suppress notices if the key is not set

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>
