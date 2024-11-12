<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = $_POST['id'];
$query = "SELECT * FROM anggota WHERE id=?";
$sql = $db1->prepare($query);
$sql->bind_param("i", $id);
$sql->execute();
$result = $sql->get_result();
$data = $result->fetch_assoc();

echo json_encode($data);
?>
