<?php
  session_start();
  $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "logg";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Nie można połączyć się z bazą danych: " . $conn->connect_error);
    }

  if (!isset($_SESSION['username'])) {
      header("Location: login.php");
      exit();
  }

  $username = $_SESSION['username'];

  echo "hello, $username!";
  echo "<a class='btn btn-xs btn-primary' href='logout.php'>Log out</a>"
?>