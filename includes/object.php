<?php
abstract class Objects {
    abstract public function getArea();
}
class Square extends Objects {
    private $width;
    private $length;

    public function __construct($width, $length) {
        $this->width = $width;
        $this->length = $length;
    }
    public function getArea() {
        return $this->width * $this->length;
    }
}

class Circle extends Objects {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return $this->radius * 2;
    }

}
