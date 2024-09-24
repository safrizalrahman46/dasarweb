<?php
$x = 75;
$y = 25;

function addition() {
    // Use global variables
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $GLOBALS['z']; // Print the result of addition
?>
