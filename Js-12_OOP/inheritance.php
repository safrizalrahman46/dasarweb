<?php
// Define the Animal class (parent class)
class Animal {
    // Protected property to hold the name of the animal
    protected $name;

    // Constructor to initialize the name of the animal
    public function __construct($name) {
        $this->name = $name;
    }

    // Method for eating
    public function eat() {
        echo $this->name . " is eating. <br>";
    }

    // Method for sleeping
    public function sleep() {
        echo $this->name . " is sleeping. <br>";
    }
}

// Define the Cat class (child class) that extends Animal
class Cat extends Animal {
    // Method for meowing
    public function meow() {
        echo $this->name . " says meow! <br>";
    }
}

// Define the Dog class (child class) that extends Animal
class Dog extends Animal {
    // Method for barking
    public function bark() {
        echo $this->name . " says woof! <br>";
    }
}

// Create a new Cat object with the name "Whiskers"
$cat = new Cat("Whiskers");

// Create a new Dog object with the name "Buddy"
$dog = new Dog("Buddy");

// Call the eat method for the Cat object
$cat->eat();

// Call the sleep method for the Dog object
$dog->sleep();

// Call the meow method for the Cat object
$cat->meow();

// Call the bark method for the Dog object
$dog->bark();
?>
