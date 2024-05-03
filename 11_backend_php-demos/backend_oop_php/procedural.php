<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Procedural PHP</title>
</head>
<body>
  <?php
    //SCRIPT example: procedural php
    $brand = "Mercedes";
    $color = "red";
    function getCarInfo($brand, $color){
      return "Brand = ".$brand." with color ".$color.".";
    }

    echo getCarInfo($brand,$color);
  ?>
</body>
</html>