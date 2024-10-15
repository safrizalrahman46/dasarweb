<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    echo "All session variables are now removed, and the session is destroyed.";
    ?>
</body>
</html>
