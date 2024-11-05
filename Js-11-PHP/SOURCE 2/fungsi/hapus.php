<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Deletion for jabatan
    if (!empty($_GET['jabatan'])) {
        $id = antiInjection($koneksi, $_GET['id']);
        $query = "DELETE FROM positions WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
        exit;
    }

    // Deletion for anggota
    elseif (!empty($_GET['anggota'])) {
        $id = antiInjection($koneksi, $_GET['id']);

        // First, delete associated data from anggota
        $query2 = "DELETE FROM members WHERE user_id = '$id'";
        if (mysqli_query($koneksi, $query2)) {

            // Now delete the user from the user table
            $query = "DELETE FROM users WHERE id = '$id'";
            if (mysqli_query($koneksi, $query)) {
                pesan('success', 'Anggota dan Data Login Telah Terhapus.');
            } else {
                pesan('warning', 'Data Anggota Terhapus, Tetapi Data Login Tidak Terhapus: ' . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', 'Anggota Tidak Terhapus: ' . mysqli_error($koneksi));
        }

        // Redirect back to anggota page
        header('Location: ../index.php?page=anggota');
        exit;
    }
} else {
    header('Location: ../index.php'); // Redirect to login if not authenticated
    exit;
}