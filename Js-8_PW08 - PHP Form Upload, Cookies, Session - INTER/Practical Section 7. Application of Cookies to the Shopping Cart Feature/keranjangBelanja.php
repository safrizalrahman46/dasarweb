<html>
<head></head>
<body>
    <h2>Keranjang Belanja</h2>
    <?php
    $beliNovel = isset($_COOKIE['beliNovel']) ? $_COOKIE['beliNovel'] : 0;
    $beliBuku = isset($_COOKIE['beliBuku']) ? $_COOKIE['beliBuku'] : 0;

    echo "Jumlah Novel: " . $beliNovel . "<br>";
    echo "Jumlah Buku: " . $beliBuku;
    ?>
</body>
</html>
