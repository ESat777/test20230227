<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="d-flex justify-content ">
<div>
        <button class="m-5" onclick="window.location.href='//localhost/Test%20Emendis/index.php';">
            Back
        </button>
    </div>
   <div class="m-5">
        <?php
                include 'includes/object.php';
                include 'includes/container.php';
                include 'includes/calculator.php';

                $length = $_POST['length'];
                $width = $_POST['width'];
                $radius = $_POST['radius'];
                $contLength = $_POST['contLength'];
                $contWidth = $_POST['contWidth'];

                $params = new Square($length, $width);
                is_numeric( $squareArea = $params->getArea());
                $params = new Circle($radius);
                is_numeric( $circleArea = $params->getArea());
                is_numeric($fullArea = $squareArea + $circleArea);
                echo ("Objects used area: ") . $fullArea  . "<br>";

                $params = new Container($contLength, $contWidth);
                is_numeric($contArea1 = $params->getCapacity());
                echo "Big container area: " . $contArea1  . "<br>" ;

                $params = new Calculator($contArea1, $fullArea );
                $params->man();
            ?>
   </div>

</body>
</html>


