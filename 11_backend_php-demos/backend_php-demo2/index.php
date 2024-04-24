<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo 2: PHP basics - Calculator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
      <input required type="number" name="num01"/>
      <select name="operator">
        <option value="add">+</option>
        <option value="subtract">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
      </select>
      <input type="number" name="num02"/>
      <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
      $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
      $operator = htmlspecialchars($_POST["operator"]);

      $errors = false;
      if (empty($num01) || empty($num02) ||empty($operator)){
        echo "<p style='color : red;'>Fill in all fields!</p>";
        $errors = true;
      }
      if (!is_numeric($num01) || !is_numeric($num02)){
        echo "<p style='color : red;'>Only write numbers!</p>";
        $errors = true;
      }
  
      if (!$errors){
        $result = 0;
        switch($operator){
          case "add":
            $result = $num01 + $num02;
            break;
          case "subtract":
            $result = $num01 - $num02;
            break;
          case "multiply":
            $result = $num01 * $num02;
            break;
          case "divide":
            $result = $num01 / $num02;
            break;
          default:
            echo "<p style='color : red;'>Something went wrong</p>";
        }
  
        echo "<p style='color : green;'>Result = ".$result."</p>";
      }
    }

    
    ?>
    
    <script src="" async defer></script>
  </body>
</html>