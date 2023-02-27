<?php
class Container {
    private $name;
    private $quantity;
    private $width;
    private $length;
    
    public function __construct($name, $quantity, $width, $length) {
      $this->name = $name;
      $this->quantity = $quantity;
      $this->width = $width;
      $this->length = $length;
    }
    
    public function getName() {
      return $this->name;
    }
    
    public function getQuantity() {
      return $this->quantity;
    }
    
    public function getWidth() {
      return $this->width;
    }
    
    public function getLength() {
      return $this->length;
    }
    
    public function getArea() {
      return $this->width * $this->length;
    }
  }
?>