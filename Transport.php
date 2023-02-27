<?php
class Transport {
    private $name;
    private $objects = array();
    
    public function __construct($name, $objects) {
      $this->name = $name;
      $this->objects = $objects;
    }
    
    public function getName() {
      return $this->name;
    }
    
    public function addObject($object) {
      $this->objects[] = $object;
    }
    
    public function getObjects() {
      return $this->objects;
    }
  }
?>