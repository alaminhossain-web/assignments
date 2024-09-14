<?php
abstract class Shape {
    abstract public function area();
}

// Circle class inheriting from Shape
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * ($this->radius ** 2);
    }
}


class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}


$circle = new Circle(5);
echo "Circle area: " . $circle->area() . "</br>";



$rectangle = new Rectangle(4, 6);
echo "Rectangle area: " . $rectangle->area() . "</br>";

?>
