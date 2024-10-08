<!DOCTYPE html>
<html>
<head>
    <title>HTML Injection Prevention</title>
</head>
<body>
    <form method="post" action="html_safe.php">
        <label for="input">Input: </label>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "Sanitized Input: " . $input . "<br>";

        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Valid Email: " . $email . "<br>";
        } else {
            echo "Invalid Email Format.<br>";
        }
    }
    ?>
</body>
</html>
