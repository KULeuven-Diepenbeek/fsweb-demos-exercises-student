<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo 8: Security storing sensitive data into database: Hashing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <h1>MySQL -> phpMyAdmin (port 3306)</h1>
    <h3>Signup</h3>
    <!-- Signup then we put data in database so we use post. (When we recover data from database we use get) -->
    <form action="includes/formhandler.inc.php" method="post">
      <input type="text" name="username" placeholder="Username"/>
      <input type="password" name="pwd" placeholder="Password"/>
      <input type="text" name="email" placeholder="E-Mail"/>
      <button type="submit">Signup</button>
    </form>
    
  <script src="" async defer></script>
  </body>
</html>