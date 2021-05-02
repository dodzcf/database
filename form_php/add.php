<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body background="https://images.unsplash.com/photo-1593371256584-ac70d0ab43d1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTh8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80" >








<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
//   echo "Connected";
}
?>



<?php
$sql = "SELECT namee, email, gender,semester,course FROM registrations";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo "<div class='table'><table class='table'><tr class='success'><th>Name</th><th>Email</th><th>Gender</th><th>Semester</th><th>Courses</th><th>Options</th></th></div>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr class='info'><td>" . $row["namee"]. "</td><td>" . $row["email"]. "</td><td>" . $row["gender"]."</td><td>" .$row["semester"]."</td><td>" .$row["course"]."</td><td><a href='Delete.php?id=".$row["namee"]."'<br>[Delete]</a> / <a href='edit.php?id=".$row["namee"]."'<br>[Edit/Update]</a></td></tr><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

 
</body>
</html>