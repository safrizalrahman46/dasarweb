<?php
class Animal {
    public $name;
    protected $age;
    private $color;

    // Constructor to initialize properties
    public function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    // Getter method for name
    public function getName() {
        return $this->name;
    }

    // Protected method for age
    protected function getAge() {
        return $this->age;
    }

    // Private method for color
    private function getColor() {
        return $this->color;
    }
}

$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal->name . "<br>"; // Public property can be accessed directly
// echo "Age: " . $animal->getAge() . "<br>"; // This would give an error as getAge() is protected
// echo "Color: " . $animal->getColor() . "<br>"; // This would give an error as getColor() is private

?>