<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Array Associative</title>
</head>
<body>
<?php
$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan'
];

echo "Nama : {$Dosen['nama']} <br>";
echo "Domisili : {$Dosen['domisili']} <br>";
echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
?>
</body>
</html>


<!-- After Modify -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Array Associative</title>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 18px;
        text-align: left;
    }
    th, td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
</style>
</head>
<body>
<?php
$Dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili' => 'Malang',
    'jenis_kelamin' => 'Perempuan'
];

echo "<table>
        <tr>
            <th>Attribute</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td>{$Dosen['nama']}</td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td>{$Dosen['domisili']}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>{$Dosen['jenis_kelamin']}</td>
        </tr>
      </table>";
?>
</body>
</html>
