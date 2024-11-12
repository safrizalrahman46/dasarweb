<?php
session_start();
include 'koneksi.php';
// include 'csrf.php'; // Nonaktifkan jika tidak diperlukan

$id = $_POST['id'];
$query = "SELECT * FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->bind_param("i", $id);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    echo json_encode($data);
} else {
    echo json_encode(['error' => 'Data tidak ditemukan']);
}
?>
