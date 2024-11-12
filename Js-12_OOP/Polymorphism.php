<?php
// Define the Shape interface
interface Shape {
    // Method declaration for calculating area
    public function calculateArea();
}

// Circle class implements the Shape interface
class Circle implements Shape {
    private $radius;

    // Constructor to initialize the radius of the circle
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Method to calculate the area of the circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle class implements the Shape interface
class Rectangle implements Shape {
    private $width;
    private $height;

    // Constructor to initialize width and height of the rectangle
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Method to calculate the area of the rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Function to print the area of any shape (Polymorphism in action)
function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "<br>";
}

// Create instances of Circle and Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Call the printArea function for both shapes
printArea($circle);
printArea($rectangle);
?>
