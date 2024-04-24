<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $id = $_POST["id"];

  try {
    require_once "./dbh.inc.php";
    $query = "DELETE FROM users WHERE id = :id ;"; // using name parameters with ':'
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":id",$id);
    $stmt->execute();

    //Close connection to save resources
    $pdo = null;
    $stmt = null;

    header("Location: ../index.php");
    die();

  } catch(PDOException){
    die("Query failed: ".$e->getMessage); // connection inside of script => use die() otherwise you can use exit()
  }

} else {
  header("Location: ../index.php");
}