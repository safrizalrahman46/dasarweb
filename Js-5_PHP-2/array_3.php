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
);N

echo "<tr>";
echo "<td>". $movie [0] [0] . "</td>";
echo "<td>". $movie [0] [1] . "</td>";
echo "<td>". $movie [0] [2] . "</td>";
echo "</tr>";


echo "<tr>";
echo "<td>". $movie [1] [0] ."</td>";
echo "<td>". $movie [1] [1] . "</td>";
echo "<td>". $movie [1] [2] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>". $movie [2] [0] . "</td>";
echo "<td>". $movie [2] [1] . "</td>";
echo "<td>". $movie [2] [2] . "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>". $movie [3] [0] . "</td>";
echo "<td>". $movie [3] [1] . "</td>";
echo "<td>". $movie [3] [2] . "</td>";
echo "</tr>";

// memakai foreach
// foreach ($movie as $m) {
//     echo "<tr>";
//     echo "<td>" . $m[0] . "</td>";
//     echo "<td>" . $m[1] . "</td>";
//     echo "<td>" . $m[2] . "</td>";
//     echo "</tr>";


// }
?>

</table>
</body>
</html>
