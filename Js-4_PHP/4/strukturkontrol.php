<?php

//1
// $nilaiNumerik = 92;

// if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
// echo "Nilai huruf: A";
// } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
// echo "Nilai huruf: B";
// } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
// echo "Nilai huruf: C";
// } elseif ($nilaiNumerik < 70) {
// echo "Nilai huruf: D";

// }

//2
// $jarakSaatIni = 0;
// $jarakTarget = 500;
// $peningkatanHarian = 30;
// $hari = 0;

// while ($jarakSaatIni < $jarakTarget) {
// $jarakSaatIni += $peningkatanHarian;
// $hari++;

// }

// echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

//3
// $jumlahLahan = 10;
// $tanamanPerLahan = 5;
// $buahPerTanaman = 10;
// $jumlahBuah = 0;

// for ($i = 1; $i <= $jumlahLahan; $i++) {
// $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);

// }

// echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

//4
// $skorUjian = [85, 92, 78, 96, 88];
// $totalSkor = 0;

// foreach ($skorUjian as $skor) {
// $totalSkor += $skor;

// }

// echo "Total skor ujian adalah: $totalSkor";

//5
// $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

// foreach ($nilaiSiswa as $nilai) {
// if ($nilai < 60) {
// echo "Nilai: $nilai (Tidak lulus) <br>";
// continue;
// }
// echo "Nilai: $nilai (Lulus) <br>";
// }

//21

// List of grades from 10 students
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Sort the grades in ascending order
sort($grades);

// Remove the two highest and two lowest grades
$filteredGrades = array_slice($grades, 2, -2);

// Calculate the total of the remaining grades
$totalScore = array_sum($filteredGrades);

// Display the total score
echo "Total score after ignoring the two highest and two lowest grades: $totalScore";
?>


