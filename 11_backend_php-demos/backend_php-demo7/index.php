<!-- http://localhost/demo6/ -->
<!-- http://localhost/demo6/example.php -->
<?php
require_once 'config.php'; // For every page you want to use these sessions on
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo 7: Basic Session security</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <h1>Prevent other programs from stealing session data</h1>
    <h2>Session id security</h2> <!-- Prevent others from stealing your session id and impersonating you (http, session guessing, session fixation makes them use their session id (eg. via link), cross-site scripting throught cookies (inject javascript)) -->
    <!--TIPS: Always validate session data; dont store sensitive information in session data eg. password, address ...; Delete session data you don't use anymore -->
    <!-- Trade offs: security vs inconvenience user -->
    <!-- You can change configuration globally for server via php.ini (session use only cookies -> session id only via session cookies and not via url [session fixation]) -->
    <?php
    echo $_SESSION["username"];
    ?>
    
  <script src="" async defer></script>
  </body>
</html>