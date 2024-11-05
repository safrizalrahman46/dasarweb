<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Use $_POST to fetch the jabatan data
    if (!empty($_POST['id']) && !empty($_POST['jabatan'])) {
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        
        // Prepare the SQL statement for updating the jabatan
        $query = "UPDATE positions SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";
        
        // Execute the query and handle success or error
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Karena: " . mysqli_error($koneksi));
        }

        // Redirect to the jabatan page
        header("Location: ../index.php?page=jabatan");
        exit(); // Stop further script execution after redirect
    } else {
        // Optional: Handle the case where id or jabatan is not set
        pesan('danger', "ID atau Jabatan tidak dapat kosong.");
        header("Location: ../index.php?page=jabatan");
        exit();
    }
} else {
    // Redirect to the login page if the session is not set
    header("Location: ../login.php");
    exit();
}
