<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';
    
    // Use $_POST instead of $_GET for form submission
    if (!empty($_POST['jabatan'])) {
        // Ensure to use $_POST for input values
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        
        // Prepare the SQL statement
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        
        // Execute the query and handle success or error
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Baru Ditambahkan.");
        } else {
            pesan('danger', "Menambahkan Jabatan Karena: " . mysqli_error($koneksi));
        }

        // Redirect to the jabatan page
        header("Location: ../index.php?page=jabatan");
        exit(); // It's good practice to call exit after a header redirect
    }
} else {
    // Optional: Handle cases where the session is not set (user not logged in)
    header("Location: ../login.php"); // Redirect to the login page or error page
    exit();
}
