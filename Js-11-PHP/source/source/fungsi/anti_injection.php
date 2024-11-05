<?php
function antiInjection($koneksi, $data)
{
    // Check if data is null or empty and handle it
    if (is_null($data) || $data === '') {
        return '';
    }

    // Remove HTML tags and encode special characters
    $cleanedData = strip_tags($data);
    $cleanedData = htmlspecialchars($cleanedData, ENT_QUOTES, 'UTF-8');

    // Escape the string to make it safe for SQL
    $filteredSql = mysqli_real_escape_string($koneksi, $cleanedData);

    return $filteredSql;
}
