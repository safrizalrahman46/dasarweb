<?php
// $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

// $nilaiLulus = [];

// foreach ($nilaiSiswa as $nilai) {
// if

// ($nilai >= 70) {
// $nilaiLulus [] = $nilai;
// }
// }
// echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);


//2

$daftarNilai = [
    'Matematika' => [
    [ 'Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ],
    'Fisika' => [
    [ 'Alice', 90],
    ['Bob', 88],
    ['Charlie', 75],
],
    'Kimia' => [
    ['Alice', 92],
    ['Bob', 80],
    ['Charlie', 85],
    
    ],
    
];
    
    $mataKuliah = 'Fisika';
    
    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";
    
    foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    
    }
?>