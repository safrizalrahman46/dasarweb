<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Handle 'jabatan' form submission
    if (!empty($_GET['jabatan'])) {
        // echo "<pra>";
        // var_dump($_GET);die;
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);
        
        $query = "INSERT INTO positions (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Baru Ditambahkan.");
        } else {
            pesan('danger', "Gagal Menambahkan Jabatan Karena: " . mysqli_error($koneksi));
        }

        header("Location: ../index.php?page=jabatan");
        exit();
    }

    // Handle 'anggota' form submission
    elseif (!empty($_GET['anggota'])) {
        // echo "<pra>";
        // var_dump($_GET);die;
        $username = antiinjection($koneksi, $_POST['username']);
        $password = antiinjection($koneksi, $_POST['password']);
        $level = antiinjection($koneksi, $_POST['level']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);

        $salt = bin2hex(random_bytes(16));
        $combined_password = $salt . $password;
        $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

        // Insert into user table
        $query = "INSERT INTO users (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt', '$level')";
        if (mysqli_query($koneksi, $query)) {
            $last_id = mysqli_insert_id($koneksi);

            // Insert into anggota table with the new user ID
            $query2 = "INSERT INTO members (nama, jenis_kelamin, alamat, no_telp, user_id, jabatan_id) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp', '$last_id', '$jabatan')";
            if (mysqli_query($koneksi, $query2)) {
                pesan('success', "Anggota Baru Ditambahkan.");
            } else {
                pesan('warning', "Gagal Menambahkan Anggota Tetapi Data Login Tersimpan Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal Menambahkan Anggota Karena: " . mysqli_error($koneksi));
        }

        header("Location: ../index.php?page=anggota");
        exit();
    }
} else {
    header("Location: ../login.php");
    exit();
}
