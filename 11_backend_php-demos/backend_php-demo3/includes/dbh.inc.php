<!-- DataBaseHandler.include.php -->
<?php

$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
  // connection via PHP Data Objects (connection becomes an object)
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  //setAttribute is a method of the PDO object -> set errormode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // print "succes";
} catch (PDOException $e) {
  print "Connection failed: " . $e->getMessage();
}