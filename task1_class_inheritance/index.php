<?php

// Base class
class Shape {
    // Method to calculate area
    public function calculateArea() {
        return 0;
    }
}

// Circle class inheriting from Shape
class Circle extends Shape {
    public $radius;
    // Constructor to initialize radius
    public function __construct($radius) {
        $this->radius = $radius;
    }
    // Override calculateArea method for circle
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle class inheriting from Shape
class Rectangle extends Shape {
    public $width;
    public $height;
    // Constructor to initialize width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    // Override calculateArea method for rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Example usage
$circle = new Circle(4);
echo "Area of the circle: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(4, 6);
echo "Area of the rectangle: " . $rectangle->calculateArea();

?>
