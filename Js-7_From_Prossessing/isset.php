<?php
// $umur = 20; // Assign a value to $umur
// if (isset($umur) && $umur >= 18) {
//     echo "Anda sudah dewasa.";
// } else {
//     echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
// }

//1.2
// $data = array("nama" => "Jane", "usia" => 25);
// if (isset($data["nama"])) {
//     echo "Nama: " . $data["nama"];
// } else {
//     echo "Variabel 'nama' tidak ditemukan dalam array.";
// }

//1.2 full
$umur;
if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.<br>";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.<br>";
}

$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"] . "<br>";
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array.<br>";
}

?>
