<?php
include('../lib/Session.php');

$session = new Session();

if ($session->get('is_login') !== true) {
    header('Location: login.php');
}

include_once('../model/BukuModel.php');
include_once('../lib/Secure.php');

$act = isset($_GET['act']) ? strtolower($_GET['act']) : '';

if ($act == 'load') {
    $buku = new BukuModel();
    $data = $buku->getData();
    $result = [];
    $i = 1;
    foreach ($data as $row) {
        $result['data'][] = [
            $i,
            $row['kategori_id'],
            $row['buku_kode'],
            $row['buku_nama'],
            $row['jumlah'],
            $row['deskripsi'],
            '<img src="' . $row['gambar'] . '" alt="' . $row['buku_nama'] . '" class="img-thumbnail" width="50">',
            '<button class="btn btn-sm btn-warning" onclick="editData(' . $row['buku_id'] . ')">...</button>',
            '<button class="btn btn-sm btn-danger" onclick="deleteData(' . $row['buku_id'] . ')">...</button>'
        ];
        $i++;
    }
    echo json_encode($result);
}

if ($act == 'get') {
    $id = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? $_GET['id'] : 0;

    $buku = new BukuModel();
    $data = $buku->getDataById($id);
    echo json_encode($data);
}

if ($act == 'save') {
    // Handle file upload if exists
    $gambar = '';
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $target_dir = "../uploads/";
        $file_extension = strtolower(pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION));
        $new_filename = uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_filename;

        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            $gambar = $target_file;
        } else {
            echo json_encode(['status' => false, 'message' => 'Gagal mengunggah gambar.']);
            return; // Menghentikan eksekusi lebih lanjut
        }
    }

    $data = [
        'kategori_id' => antiSqlInjection($_POST['kategori_id']),
        'buku_kode' => antiSqlInjection($_POST['buku_kode']),
        'buku_nama' => antiSqlInjection($_POST['buku_nama']),
        'jumlah' => antiSqlInjection($_POST['jumlah']),
        'deskripsi' => antiSqlInjection($_POST['deskripsi']),
        'gambar' => $gambar
    ];

    $buku = new BukuModel();
    $buku->insertData($data);

    echo json_encode([
        'status' => true,
        'message' => 'Data berhasil disimpan.'
    ]);
}

if ($act == 'update') {
    $id = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? $_GET['id'] : 0;

    // Handle file upload if exists
    $gambar = antiSqlInjection($_POST['gambar_lama']);
    if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
        $target_dir = "../uploads/";
        $file_extension = strtolower(pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION));
        $new_filename = uniqid() . '.' . $file_extension;
        $target_file = $target_dir . $new_filename;

        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // Delete old file if exists
            if (file_exists($_POST['gambar_lama'])) {
                unlink($_POST['gambar_lama']);
            }
            $gambar = $target_file;
        }
    }

    $data = [
        'kategori_id' => antiSqlInjection($_POST['kategori_id']),
        'buku_kode' => antiSqlInjection($_POST['buku_kode']),
        'buku_nama' => antiSqlInjection($_POST['buku_nama']),
        'jumlah' => antiSqlInjection($_POST['jumlah']),
        'deskripsi' => antiSqlInjection($_POST['deskripsi']),
        'gambar' => $gambar
    ];

    $buku = new BukuModel();
    $buku->updateData($id, $data);

    echo json_encode([
        'status' => true,
        'message' => 'Data berhasil diupdate.'
    ]);
}

if ($act == 'delete') {
    $id = (isset($_GET['id']) && ctype_digit($_GET['id'])) ? $_GET['id'] : 0;

    // Get existing data to delete image file
    $buku = new BukuModel();
    $existing_data = $buku->getDataById($id);

    // Delete image file if exists
    if ($existing_data && !empty($existing_data['gambar'])) {
        if (file_exists($existing_data['gambar'])) {
            unlink($existing_data['gambar']);
        }
    }

    // Delete database record
    $buku->deleteData($id);

    echo json_encode([
        'status' => true,
        'message' => 'Data berhasil dihapus.'
    ]);
}
