<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Comparison operations
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Logical operations
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Display the results
echo "Hasil Tambah: $hasilTambah\n";
echo "Hasil Kurang: $hasilKurang\n";
echo "Hasil Kali: $hasilKali\n";
echo "Hasil Bagi: $hasilBagi\n";
echo "Sisa Bagi: $sisaBagi\n";
echo "Pangkat: $pangkat\n\n";

echo "Hasil Sama: " . ($hasilSama ? 'true' : 'false') . "\n";
echo "Hasil Tidak Sama: " . ($hasilTidakSama ? 'true' : 'false') . "\n";
echo "Hasil Lebih Kecil: " . ($hasilLebihKecil ? 'true' : 'false') . "\n";
echo "Hasil Lebih Besar: " . ($hasilLebihBesar ? 'true' : 'false') . "\n";
echo "Hasil Lebih Kecil atau Sama: " . ($hasilLebihKecilSama ? 'true' : 'false') . "\n";
echo "Hasil Lebih Besar atau Sama: " . ($hasilLebihBesarSama ? 'true' : 'false') . "\n\n";

echo "Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "\n";
echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "\n";
echo "Hasil NOT A: " . ($hasilNotA ? 'true' : 'false') . "\n";
echo "Hasil NOT B: " . ($hasilNotB ? 'true' : 'false') . "\n";


$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
?>
