<?php

// function perkenalan() {
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Elok<br/>"; // Tulis sesuai nama kalian
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// memanggil fungsi yang sudah dibuat
//perkenalan();


//Add Parameters
// Membuat fungsi dengan parameter
// function perkenalan($nama, $salam) {
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// // Memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Elok";
// $ucapanSalam = "Selamat pagi";

// // Memanggil lagi
// perkenalan($saya, $ucapanSalam);

// Add parameter dan using default value

// Membuat fungsi dengan parameter dan nilai default
function perkenalan ($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama. "<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
    
    }
    
    //memanggil fungsi yang sudah dibuat
    perkenalan ("Hamdana","Hallo");
    
    echo "<hr>";
    
    $saya = "Elok";
    $ucapanSalam = "Selamat pagi";
    
    //memanggil lagi tanpa mengisi parameter salam
    perkenalan ($saya);

?>
