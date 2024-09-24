<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Multidimensional Array</title>
</head>
<body>
<h2>Multidimensional Array</h2>
<table border="1">

<tr>
    <th>Judul Film</th>
    <th>Tahun</th>
    <th>Rating</th>
</tr>

<?php
$movie = array (
    array ("Avengers: Infinity War", 2018, 8.7),
    array ("The Avengers", 2012, 8.1),
    array ("Guardians of the Galaxy", 2014, 8.1),
    array ("Iron Man", 2008, 7.9)
);

foreach ($movie as $m) {
    echo "<tr>";
    echo "<td>" . $m[0] . "</td>";
    echo "<td>" . $m[1] . "</td>";
    echo "<td>" . $m[2] . "</td>";
    echo "</tr>";
}
?>

</table>
</body>
</html>
