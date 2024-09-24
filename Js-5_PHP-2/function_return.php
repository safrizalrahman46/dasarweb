<?php
// //membuat fungsi
// function hitungUmur($thn_lahir, $thn_sekarang) {
// $umur = $thn_sekarang - $thn_lahir;
// return $umur;
// }
// echo "Umur saya adalah ". hitungUmur(1988, 2023) ."tahun" //isi sesuai dengan tahun lahir kalian

// Modify

// Membuat fungsi untuk menghitung umur
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

// Membuat fungsi perkenalan
function perkenalan($nama, $salam = "Assalamualaikum") {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    
    // Memanggil fungsi lain
    echo "Saya berusia " . hitungUmur(1988, 2023) . " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// Memanggil fungsi perkenalan
perkenalan("Elok");


?>