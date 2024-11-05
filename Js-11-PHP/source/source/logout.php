<?php
// Start session if it hasn't started already
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Destroy the session to log out the user
session_destroy();

// Redirect to the homepage or login page
header('Location: index.php');
exit();
