<?php
// $myArray = array(); // Array kosong
// if (empty($myArray)) {
//     echo "Array tidak terdefinisi atau kosong.<br>";
// } else {
//     echo "Array terdefinisi dan tidak kosong.<br>";
// }

//2.2

$myArray = array(); // Array kosong
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.<br>";
} else {
    echo "Array terdefinisi dan tidak kosong.<br>";
}

$nonExistentVar; // Variabel belum diinisialisasi
if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.<br>";
} else {
    echo "Variabel terdefinisi dan tidak kosong.<br>";
}


?>
