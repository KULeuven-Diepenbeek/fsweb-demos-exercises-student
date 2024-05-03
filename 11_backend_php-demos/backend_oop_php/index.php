<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Object Oriented Programming in PHP</title>
</head>
<body>
  <?php
    // Load in classes
    require_once 'Classes/Car.php';

    // Instantiate object
    $car01 = new Car("Mercedes","red");
    $car02 = new Car("Audi");

    echo $car01->getBrand();
    echo "<br/>";
    echo $car01->nrofwheels;
    echo "<br/>";
    echo $car01->getCarInfo();
    echo "<br/>";
    $car01->setColor("Green");
    echo $car01->getCarInfo();
  ?>
</body>
</html>
