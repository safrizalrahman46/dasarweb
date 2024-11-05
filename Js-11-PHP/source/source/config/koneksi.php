<?php
// Set the default timezone
date_default_timezone_set("Asia/Jakarta");

// Connect to the MySQL database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Check for a connection error and display an error message if the connection fails
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
