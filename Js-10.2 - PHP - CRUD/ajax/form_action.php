<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

if ($id == "") {
    // INSERT Data
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);
    if ($sql->execute()) {
        echo json_encode(['success' => 'Data berhasil disimpan']);
    } else {
        echo json_encode(['error' => 'Gagal menyimpan data']);
    }
} else {
    // UPDATE Data
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);
    if ($sql->execute()) {
        echo json_encode(['success' => 'Data berhasil diupdate']);
    } else {
        echo json_encode(['error' => 'Gagal mengupdate data']);
    }
}
?>
