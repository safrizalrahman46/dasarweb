<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdbb");

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
// define('HOST', 'localhost');
// define('USER', 'root');
// define('PASS', '');
// define('DB1', 'prakwebdbb');

// // Buat koneksi
// $db1 = new mysqli(HOST, USER, PASS, DB1);

// if ($db1->connect_error) {
//     die("Connection failed: " . $db1->connect_error);
// }
?>
