<?php
// Product price
$productPrice = 120000;
$discount = 0;

// Check if the product price qualifies for a discount
if ($productPrice > 100000) {
    $discount = 0.20 * $productPrice;
}

// Calculate the final price after applying the discount
$finalPrice = $productPrice - $discount;

// Display the final price
echo "The price to be paid after discount: Rp $finalPrice";
?>
