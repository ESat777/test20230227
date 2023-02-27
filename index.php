<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Test</title>
</head>

<body>
  <div class="m-5" >
        <?php
        include('ContainerObject.php');
        include('Transport.php');
        include('Container.php');
        include('Calculation.php');
        include('Constants.php');


        $transportsJSON = file_get_contents(TRANSPORTS_DATA);
            
        function readTransports($transportsJSON) {
            // Read the JSON data for transports
            $transportsData = json_decode($transportsJSON, true);
          
            // Create an array of Transport objects
            $transports = [];
            foreach ($transportsData[TRANSPORTS] as $transportData) {
              $name = $transportData[TRANSPORT_NAME];
              $objectsData = $transportData[TRANSPORT_OBJECTS];
              $objects = [];
              foreach ($objectsData as $objectData) {
                if ($objectData['type'] === 'square') {
                  $object = new Square($objectData['width'], $objectData['length']);
                } else {
                  $object = new Circle($objectData['radius']);
                }
                $objects[] = $object;
              }
              $transport = new Transport($name, $objects);
              $transports[] = $transport;
            }
          
            // Return the array of Transport objects
            return $transports;
          }
          
          function readContainers() {
            // Read the JSON data for containers
            $containersJSON = file_get_contents('Data/Container.json');
            $containersData = json_decode($containersJSON, true);
          
            // Create an array of Container objects
            $containers = [];
            foreach ($containersData['containers'] as $containerData) {
              $name = $containerData['name'];
              $quantity = $containerData['quantity'];
              $width = $containerData['width'];
              $length = $containerData['length'];
              $container = new Container($name, $quantity, $width, $length);
              $containers[] = $container;
            }
            // print_r($containers);
          
            // Return the array of Container objects
            return $containers;
          }


        $transports = readTransports($transportsJSON);
        // print_r($transports);

        foreach ($transports as $transport) {
          echo "Transport: " . $transport->getName() . "<br>";
          $objects = $transport->getObjects();
          foreach ($objects as $object) {
            if ($object instanceof Square) {
              echo "Square: width=" . $object->getWidth() . ", length=" . $object->getLength() . ", Area= " .$object->getArea() . "<br>";
            } else {
              echo "Circle: radius=" . $object->getRadius() . ", Area= " . (int)$object->getArea() . "<br>";
            }
          }
          echo "<br>";
        }
        $containers = readContainers();

        foreach ($containers as $container) {
          echo "Container: " . $container->getName() . "<br>";
          echo "Dimensions: " . $container->getWidth() . " x " . $container->getLength() . ", Area= " .$container->getArea() ."<br>";
          echo "<br>";
        }

        $containersJSON = file_get_contents('Data/Container.json');
        $transportsJSON = file_get_contents('Data//Transport.json');

        $transport_data = json_decode($transportsJSON, true);
        $container_data = json_decode($containersJSON, true);

        // Create Container objects from the container data
        $containers = [];
        foreach ($container_data['containers'] as $container) {
          $containers[] = new Container($container['name'], $container['quantity'], $container['width'], $container['length']);
        }

        // Create a Calculation object and calculate the results
        $calculation = new Calculation($transport_data[TRANSPORTS], $containers);
        $results = $calculation->calculate();

        // Print the results
        foreach ($results as $result) {
          echo "Transport: {$result['transport_name']}<br>";
          if ($result['container_type']) {
            echo "Container type: {$result['container_type']}<br>";
            echo "Container count: {$result['container_count']}<br>";
          } else {
            echo "No suitable container found.<br>";
          }
          echo "<br>";
        }

        ?>
      <button class="m-5" onclick="window.location.href='https://testas.projektukas.online/test.php';">
        Input Parameters
      </button>
    </div>


</body>
</html> 