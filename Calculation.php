<?php
class Calculation {
    private $transports;
    private $containers;
    
    public function __construct($transports, $containers) {
      $this->transports = $transports;
      $this->containers = $containers;
    }
    
    public function calculate() {
      $results = [];
      
      foreach ($this->transports as $transport) {
        $total_area = 0;
        $object_count = 0;
        
        // Calculate the total area and object count for the current transport
        foreach ($transport['objects'] as $object) {
          switch ($object['type']) {
            case 'square':
              $total_area += $object['width'] * $object['length'];
              $object_count++;
              break;
            case 'circle':
              $total_area += pi() * pow($object['radius'], 2);
              $object_count++;
              break;
            default:
              // Ignore objects of unknown type
              break;
          }
        }
        
        // Determine the type and quantity of containers needed for the current transport
        $container_type = null;
        $container_count = 0;
        foreach ($this->containers as $container) {
          
          if ($total_area/$object_count <= $container->getArea()) {
            $container_type = $container->getName();
            if($container_type === "Small Container"){
              $trans = $total_area / $container->getArea();
              $container_count = ceil($trans);
            }
            break;
          }
        }
        
        // Add the current transport's results to the overall results array
        $results[] = [
          'transport_name' => $transport['name'],
          'container_type' => $container_type,
          'container_count' => $container_count
        ];
      }
      
      return $results;
    }
  }
?>