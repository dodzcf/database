<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<body style="background-color:#089">
<div class="container">
<h2 style="color: #066506">Nutec 21 Registration Form</h2>
    <div>
    <form method="post" >
  <div class="form-group">
    <label for="emaill">Email address</label>
    <input type="email" name="email1" class="form-control" id="emaill" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password1" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Roll Number</label>
    <input type="name" name="roll1" class="form-control" id="exampleInputPassword1" placeholder="Roll Number">
  </div>


<div>
<h5>Choose Department</h5>
<select name="dept" id="dept">
<?php
$genders = array( 'Computer Science', 'Software Engineering','Electrical Engineering' );
foreach( $genders as $value )
{
    $selected = ( $Gender == $value )? ' selected="selected"': '';
    echo '<option value="' . $value . '"' . $selected . '>' . $value . '</option>';
}
?>

</select>
</div>

<div>
<h5>Choose Event</h5>
<select name="event" id="event">
<?php
$genders = array( 'Coding War', 'Music compitition','Harware desiging' );
foreach( $genders as $value )
{
    $selected = ( $Gender == $value )? ' selected="selected"': '';
    echo '<option value="' . $value . '"' . $selected . '>' . $value . '</option>';
}
?>

</select>
</div>


</div>


  <button type="submit" class="btn btn-primary" action="search.php">Submit</button>
</form>





<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nutec21";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else
{
    echo "<br>";
    echo "connected to server";
}
echo "<br>";
// sql to create table
$sql = "CREATE TABLE registrations (
roll_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50),
passwords varchar(50),
department VARCHAR(30),
eventt varchar(30))";

if ($conn->query($sql) === TRUE) {
  echo "Table named Registration created successfully";
} else {
//   echo "Error creating table: " . $conn->error;
}


$email = $_POST["email1"];
$password1 = $_POST["password1"];
$roll = $_POST["roll1"];
$department=$_POST["dept"];
$event=$_POST["event"];
echo "<br>";
echo $email;
echo "<br>";
echo $password1;
echo "<br>";
echo $roll;
echo "<br>";
echo $department;
echo "<br>";
echo $event;
echo "<br>";

$sql="INSERT INTO registrations(roll_no,email,passwords,department,eventt) VALUES ('$roll','$email','$password1','$department','$event')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }




    
$conn->close();
?>


</div>
</div>
</body>
</html>