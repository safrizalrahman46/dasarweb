<?php 
$daftarKaryawan = [
    [ 'Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
] ;
    $karyawanPengalamanLimaTahun = [];
    
    foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
    $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
    }
    
    echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ',
    $karyawanPengalamanLimaTahun);

?>

