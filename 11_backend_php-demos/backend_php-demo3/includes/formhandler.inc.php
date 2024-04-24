<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST["username"]; // no htmlspecialchars(...) necessary since we do not print these values to html. where te problems can arise.
  $pwd = $_POST["pwd"];
  $email = $_POST["email"];

  try {
    require_once "./dbh.inc.php"; //Link to a file -> includes all the code in formhandler. (include gives some warnings, requires gives errors)

    // $query = "INSERT INTO users (username, pwd, email) VALUES ($username, $pwd, $email);"; //VULNARABLE FOR SQLINJECTION => prepared statements
    // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);"; // ?'s are placeholders, noname parameters
    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);"; // using name parameters with ':'
    $stmt = $pdo->prepare($query);

    // $stmt->execute([$username, $pwd, $email]); // When using '?' instead of named parameters
    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":pwd",$pwd);
    $stmt->bindParam(":email",$email);
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