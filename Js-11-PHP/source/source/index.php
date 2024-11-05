<?php
// Start session if it hasn't started already
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in by verifying the session 'level'
if (!empty($_SESSION['level'])) {
    // Include necessary configuration and function files
    require 'config/koneksi.php';
    require 'fungsi/pesan_kilat.php';

    // Include header template
    include 'admin/template/header.php';

    // Check if a page parameter is set in the URL and include the respective module
    if (!empty($_GET['page'])) {
        include 'admin/module/' . $_GET['page'] . '/index.php';
    } else {
        // If no specific page is set, load the default home template
        include 'admin/template/home.php';
    }

    // Include footer template
    include 'admin/template/footer.php';
} else {
    // If user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
