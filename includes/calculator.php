<?php
 class Calculator {
    public $contArea1;
    public $fullArea;

    public function __construct($contArea1, $fullArea) {
        $this->contArea1 = $contArea1;
        $this->fullArea = $fullArea;
    }
    public function man() {
        $contArea2 = 10000 ;
        echo "Small container area: " . $contArea2 . "<br>";

       
        if( $this->contArea1 - $this->fullArea < 0) {
            $leftSpace = $this->fullArea / $this->contArea1;
            $countContainers1 = (int)$leftSpace;
            $d = $this->fullArea - ($this->contArea1 * $countContainers1);
        
            if($d > 0) {
                $leftSpace = $d / $contArea2;
                $countContainers2 = (int)$leftSpace;
                if($leftSpace > 0){
                    $countContainers2 ++ ;
                }
                echo "Small containers: " . $countContainers2 . "<br>"; 
            }
            echo  "Big containers: " . $countContainers1 ."<br>";
        }elseif($this->fullArea > 0 ) {
            $leftSpace = $this->fullArea / $contArea2 ;    
            $countContainers2 = (int)$leftSpace;
            if($leftSpace > 0){
                $countContainers2 ++ ;
                if($countContainers2 >= 4) {
                    echo "Small containers: " . $countContainers2 . 
                    " or in 1 big container." . "<br>";
                }
                else{ echo "Small containers: " . $countContainers2 . "<br>";
                }
                return;
            }
        }
        if($countContainers1 < 0 && $countContainers2 < 4) {
                echo "Your object will by send in small containers!" . "<br>";
            }
            elseif($this->fullArea < $this->contArea1 && $countContainers2 < 4){
                echo "Your object will by send in big container!" . "<br>";
            }
            elseif($countContainers1 > 0 && $countContainers2 > 0){
                echo "Container too small for solid object.
                This calculation is only suitable for dividing
                 the object into smaller parts!" . "<br>";
            }
        }

}