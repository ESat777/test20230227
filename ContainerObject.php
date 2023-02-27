
<?php
class ContainerObject {
  protected $type;
  
  public function __construct($type) {
    $this->type = $type;
  }
  
  public function getType() {
    return $this->type;
  }
  
}

class Square extends ContainerObject {
  private $width;
  private $length;
  
  public function __construct($width, $length) {
    parent::__construct('square');
    $this->width = $width;
    $this->length = $length;
  }
  
  public function getArea() {
    return $this->width * $this->length;
  }
  public function getWidth() {
    return $this->width;
  }
  public function getLength() {
    return $this->length;
  }
}

class Circle extends ContainerObject {
  private $radius;
  
  public function __construct($radius) {
    parent::__construct('circle');
    $this->radius = $radius;
  }
  
  public function getArea() {
    return pi() * pow($this->radius, 2);
  }
  public function getRadius() {
    return $this->radius;
  }
}
?>