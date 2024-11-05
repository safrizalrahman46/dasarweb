<?php
function antiinjection($koneksi, $data) {
    $filter_sql = mysqli_real_escape_string($koneksi, stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
    return $filter_sql;
}

session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
        require '../fungsi/anti_injection.php';
        require_once '../fungsi/anti_injection.php'; // Use require_once

    // Use $_POST to fetch the jabatan data
    if (!empty($_POST['id']) && !empty($_POST['jabatan'])) {
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        
        // Check if 'keterangan' is set in the POST request
        $keterangan = isset($_POST['keterangan']) ? antiinjection($koneksi, $_POST['keterangan']) : null;

        // Prepare the SQL statement for updating the jabatan
        $query = "UPDATE positions SET jabatan = '$jabatan'" . ($keterangan !== null ? ", keterangan = '$keterangan'" : "") . " WHERE id = '$id'";
        
        // Execute the query and handle success or error
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Karena: " . mysqli_error($koneksi));
        }

        // Redirect to the jabatan page
        header("Location: ../index.php?page=jabatan");
        exit(); // Stop further script execution after redirect
    } elseif (!empty($_GET['anggota'])) {
        // Handle update for anggota (member)
        $user_id = antiinjection($koneksi, $_POST['id']);
        $nama = antiinjection($koneksi, $_POST['nama']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
        $alamat = antiinjection($koneksi, $_POST['alamat']);
        $no_telp = antiinjection($koneksi, $_POST['no_telp']);
        $username = antiinjection($koneksi, $_POST['username']);

        // Update anggota data
        $query_anggota = "UPDATE members SET 
            nama = '$nama',
            jenis_kelamin = '$jenis_kelamin',
            alamat = '$alamat',
            no_telp = '$no_telp',
            jabatan_id = '$jabatan'
            WHERE user_id = '$user_id'";

        if (mysqli_query($koneksi, $query_anggota)) {
            // Check if password is set for update
            if (!empty($_POST['password'])) {
                $password = $_POST['password'];
                // Generate random salt
                $salt = bin2hex(random_bytes(16));
                // Combine salt with password
                $combined_password = $salt . $password;
                // Hash password with salt
                $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

                $query_user = "UPDATE users SET username = '$username', password = '$hashed_password', salt = '$salt' WHERE id = '$user_id'";
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Password Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            } else {
                $query_user = "UPDATE users SET username = '$username' WHERE id = '$user_id'";
                if (mysqli_query($koneksi, $query_user)) {
                    pesan('success', "Anggota Telah Diubah.");
                } else {
                    pesan('warning', "Data Anggota Berhasil Diubah, Tetapi Username Gagal Diubah Karena: " . mysqli_error($koneksi));
                }
            }
        } else {
            pesan('danger', "Mengubah Anggota Karena: " . mysqli_error($koneksi));
        }

        header("Location: ../index.php?page=anggota");
        exit();
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
?>
