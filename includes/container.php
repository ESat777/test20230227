<?php
 class Container {
    public $contLength;
    public $contWidth;

    public function __construct($contLength, $contWidth) {
        $this->contLength = $contLength;
        $this->contWidth = $contWidth;
    }
    public function getCapacity() {
        return $this->contLength * $this->contWidth;
    }

}