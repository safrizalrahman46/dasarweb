<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Use $_GET to fetch the ID from the URL
    if (!empty($_GET['id'])) {
        // Sanitize the input ID
        $id = antiinjection($koneksi, $_GET['id']);
        
        // Prepare the SQL statement
        $query = "DELETE FROM positions WHERE id = '$id'";
        
        // Execute the query and handle success or error
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }

        // Redirect to the jabatan page
        header("Location: ../index.php?page=jabatan");
        exit(); // Stop further script execution after redirect
    }
} else {
    // Optional: Handle cases where the session is not set (user not logged in)
    header("Location: ../login.php"); // Redirect to the login page or error page
    exit();
}
