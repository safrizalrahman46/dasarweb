<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = isset($_POST['id']) ? stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES))) : "";
    $nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
    $jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
    $alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
    $no_telp = stripslashes(strip_tags(htmlspecialchars($_POST['no_telp'], ENT_QUOTES)));

    if ($id == "") {
        // INSERT data
        $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
        $sql = $db1->prepare($query);
        $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_telp);
        if ($sql->execute()) {
            echo json_encode(['success' => 'Data berhasil disimpan']);
        } else {
            echo json_encode(['error' => 'Gagal menyimpan data']);
        }
    } else {
        // UPDATE data
        $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
        $sql = $db1->prepare($query);
        $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_telp, $id);
        if ($sql->execute()) {
            echo json_encode(['success' => 'Data berhasil diupdate']);
        } else {
            echo json_encode(['error' => 'Gagal mengupdate data']);
        }
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // DELETE data
    parse_str(file_get_contents("php://input"), $_DELETE);
    $id = stripslashes(strip_tags(htmlspecialchars($_DELETE['id'], ENT_QUOTES)));

    $query = "DELETE FROM anggota WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param("i", $id);
    if ($sql->execute()) {
        echo json_encode(['success' => 'Data berhasil dihapus']);
    } else {
        echo json_encode(['error' => 'Gagal menghapus data']);
    }
} else {
    echo json_encode(['error' => 'Invalid request']);
}
?>
