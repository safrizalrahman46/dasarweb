<?php
// if (isset($_FILES['file'])) {
//     $errors = array();
//     $file_name = $_FILES['file']['name'];
//     $file_size = $_FILES['file']['size'];
//     $file_tmp = $_FILES['file']['tmp_name'];
//     $file_type = $_FILES['file']['type'];
//     $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
//     $extensions = array("pdf", "doc", "docx", "txt");

//     if (in_array($file_ext, $extensions) === false) {
//         $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
//     }

//     if ($file_size > 2097152) { // 2 MB in bytes
//         $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
//     }

//     if (empty($errors) == true) {
//         if (!file_exists('documents')) {
//             mkdir('documents', 0777, true);
//         }
//         move_uploaded_file($file_tmp, "documents/" . $file_name);
//         echo "File berhasil diunggah.";
//     } else {
//         echo implode(" ", $errors);
//     }
// } else {
//     echo "Tidak ada file yang diunggah.";
// }

if (isset($_FILES['files'])) {
    $errors = array();
    $targetDirectory = "images/";

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($file_ext, $allowedExtensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
        }

        if ($file_size > 5242880) { // 5 MB in bytes
            $errors[] = 'Ukuran file tidak boleh lebih dari 5 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $targetDirectory . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
            echo "<img src='" . $targetDirectory . $file_name . "' width='200'><br>";
        } else {
            echo implode(" ", $errors) . "<br>";
        }
    }

    if (empty($_FILES['files']['name'][0])) {
        echo "Tidak ada file yang diunggah.";
    }
}
?>
