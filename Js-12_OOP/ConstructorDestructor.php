<?php
class Car {
    private $brand;

    // Constructor
    public function __construct($brand) {
        echo "A new car is created. <br>";
        $this->brand = $brand;
    }

    // Getter method for brand
    public function getBrand() {
        return $this->brand;
    }

    // Destructor
    public function __destruct() {
        echo "The car is destroyed. <br>";
    }
}

$car = new Car("Toyota");
echo "Brand: " . $car->getBrand() . "<br>";
?>