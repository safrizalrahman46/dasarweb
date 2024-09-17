<?php
$totalSeats = 45;
$occupiedSeats = 28;

$emptySeats = $totalSeats - $occupiedSeats;
$percentageEmpty = ($emptySeats / $totalSeats) * 100;

echo "The percentage of seats still empty in the restaurant is $percentageEmpty%.\n";
?>
