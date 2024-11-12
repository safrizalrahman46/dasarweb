<?php
// Define the Car class
class Car {
    // Private properties to store the car's model and color
    private $model;
    private $color;

    // Constructor to initialize the car's model and color
    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    // Getter method for the car's model
    public function getModel() {
        return $this->model;
    }

    // Setter method for the car's color
    public function setColor($color) {
        $this->color = $color;
    }

    // Getter method for the car's color
    public function getColor() {
        return $this->color;
    }
}

// Create a new Car object
$car = new Car("Toyota", "Blue");

// Get and display the car's model and color using getter methods
echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";

// Update the car's color using the setter method
$car->setColor("Red");

// Get and display the updated color
echo "Updated Color: " . $car->getColor() . "<br>";
?>
