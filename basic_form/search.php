<html>
<head>
	<title>Registration Searching Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color:#089">
<h2 style="color: #066506">Registration Searching Form</h2>



<!-- <div>
<h5>How do you want to search?</h5>
<select name="dept" id="dept"> -->



 



<!-- For enetering The information -->



<form action="#" method="post">
<select name="Color">
<option value="Choose">--Choose Value--</option>
<option value="Roll Number">Roll Number</option>
<option value="Department">Department</option>
<option value="Event">Event</option>
</select>
<br>
<input type="submit" name="submit" value="Choose" />
</form>
<?php


if(isset($_POST['submit'])){
$selected_val = $_POST['Color'];  
}





if($selected_val=="Choose")
{
  echo "Please Choose value";
  
}







if($selected_val=="Roll Number")
{
  echo "Roll number selected";
  echo "<br>";
  ?>

<form action="style.php" method="post">



 
<div class="input-group input-group-sm mb-3">
  <input type="text" name="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>



<input type="submit">
</form>



<?php
}

if($selected_val=="Department")
{
  echo "Department selected";


  ?>

<form action="dept.php" method="post">



 
<div class="input-group input-group-sm mb-3">
  <input type="text" name="deptt" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>



<input type="submit">
</form>



<?php

}

if($selected_val=="Event")
{
  echo "Event selected";

  ?>

  <form action="event.php" method="post">
  
  
  
   
  <div class="input-group input-group-sm mb-3">
    <input type="text" name="eventt" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
  </div>
  
  
  
  <input type="submit">
  </form>
  
  
  
  <?php
}




?>




<?php

?>












</body>
</html>








<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nutec21";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);



if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else
{
    echo "<br>";
    echo "connected to server";
}

echo "<br>";

$sql = "SELECT * FROM `registrations`";
$result = $conn->query($sql);





$conn->close();
?>