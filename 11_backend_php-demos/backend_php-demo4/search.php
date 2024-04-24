<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $usersearch = $_POST["usersearch"];

  try {
    require_once "includes/dbh.inc.php";

    $query = "SELECT * FROM comments WHERE username = :usersearch;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":usersearch",$usersearch);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC); //fetch as associative array

    //Close connection to save resources
    $pdo = null;
    $stmt = null;

  } catch(PDOException){
    die("Query failed: ".$e->getMessage);
  }

} else {
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Demo 4: PHP basics - MySQL retrieved searched data</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <h3>Search results</h3>
    <?php
    
    if(empty($results)){
      echo "<div>";
      echo "<p>There were no results!</p>";
      echo "</div>";
    }else{
      foreach ($results as $row){
        echo "<div>";
        echo htmlspecialchars($row["username"]);
        echo " commented: ";
        echo htmlspecialchars($row["comment_text"]);
        echo "</div>";
      }
    }

    ?>
    
  <script src="" async defer></script>
  </body>
</html>