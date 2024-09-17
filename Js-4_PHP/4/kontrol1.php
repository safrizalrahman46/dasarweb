
<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
echo "Nilai huruf: D";


// List of grades from 10 students
$grades = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Sort the grades in ascending order
sort($grades);

// Remove the two highest and two lowest grades
$filteredGrades = array_slice($grades, 2, -2);

// Calculate the total of the remaining grades
$totalScore = array_sum($filteredGrades);

// Display the total score
echo "Total score after ignoring the two highest and two lowest grades: $totalScore";
}