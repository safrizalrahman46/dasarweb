
// $input = $_POST['input'];
// $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');



<!DOCTYPE html>
<html>
<head>
    <title>HTML Injection Prevention</title>
</head>
<body>
    <form method="post" action="html_safe.php">
        <label for="input">Input: </label>
        <input type="text" name="input" id="input" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "Sanitized Input: " . $input;
    }
    ?>
</body>
</html>
