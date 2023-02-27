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
        <button class="m-5" onclick="window.location.href='https://testas.projektukas.online/index.php';">
            Back
        </button>
    </div>

   <div class="m-5">
   <h3>Input Parameters</h3>
   <form class="form-group" action="calc.php" method="POST">
        <label>Squere length</label><br>
        <input type="text" name="length" required><br>
        <label>Squere width</label><br>
        <input type="text" name="width" required><br>
        <label>Circle radius</label><br>
        <input type="text" name="radius" required><br>
        <label>Container length</label><br>
        <input type="text" name="contLength" value="200" required><br>
        <label>Container width</label><br>
        <input type="text" name="contWidth" value="300" required><br>
        <button class="m-4">Submit</button>
    </form>
    
   </div>
   <div>
   
   </div>
</body>
</html>