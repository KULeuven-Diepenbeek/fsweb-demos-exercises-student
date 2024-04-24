<!-- http://localhost/demo6/ -->
<!-- http://localhost/demo6/example.php -->
<?php
session_start();
$_SESSION["username"] = "Arne";
// unset($_SESSION["username"]);  // delete one session variable
// session_unset();               // unsets all session variables (also for the current page)
// session_destroy();             // purges session data but not for the current page
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo 6: Sessions</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <h1>Sessions</h1>

    <?php
    echo $_SESSION["username"];
    ?>
    
  <script src="" async defer></script>
  </body>
</html>