<?php
// Question 13: Arithmetic, comparison, and logical operations
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Logical results
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "\n";
echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "\n";
echo "Hasil NOT A: " . ($hasilNotA ? 'true' : 'false') . "\n";
echo "Hasil NOT B: " . ($hasilNotB ? 'true' : 'false') . "\n";

// Question 16: Restaurant seats calculation
$totalSeats = 45;
$occupiedSeats = 28;

$emptySeats = $totalSeats - $occupiedSeats;
$percentageEmpty = ($emptySeats / $totalSeats) * 100;

echo "The percentage of seats still empty in the restaurant is $percentageEmpty%.\n";
?>
