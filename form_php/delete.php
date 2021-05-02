<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regform";

$id=$_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM registrations WHERE namee='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location:add.php");
  $conn->close();
} else {
  echo "Error deleting record: " . $conn->error;
}


?>