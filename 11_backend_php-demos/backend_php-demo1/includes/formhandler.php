<?php
if (htmlspecialchars($_SERVER["REQUEST_METHOD"]) == "GET" && !empty($_REQUEST["name"])){
  print htmlspecialchars($_GET["name"]);
}else{
  header("Location: ../index.php");
}

// NO CLOSING TAG !!!