<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect value of input field
    $name = $_REQUEST['fname']; // Note: Removed the extra space
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "Hello, " . htmlspecialchars($name) . "!";
    }
}
?>

</body>
</html>
