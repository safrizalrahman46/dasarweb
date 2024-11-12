<?php
// Define the Car class
class Car {
    // Declare a public property (attribute) called $brand
    public $brand;

    // Declare a public method called startEngine
    public function startEngine() {
        echo "Engine started!<br>";
    }
}

// Create two objects (instances) of the Car class
$car1 = new Car();
$car2 = new Car();

// Set the brand attribute for each car object
$car1->brand = "Toyota";
$car2->brand = "Honda";

// Call the startEngine method for the first car
$car1->startEngine();

// Output the brand of the second car
echo "The brand of the second car is: " . $car2->brand;
?>
