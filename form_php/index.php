
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
  // echo "Connected ";
}
// echo "<br>";
$query = "CREATE TABLE registrations (
	namee VARCHAR(60) PRIMARY KEY,
	email VARCHAR(50) NOT NULL,
	passwords VARCHAR(50) NOT NULL,
	gender VARCHAR(50) NOT NULL,
	semester INT(50) NOT NULL,
	course VARCHAR(60) NOT NULL
	)";
	
	if ($conn->query($query) === TRUE) {
	  // echo "Table Regform created successfully";
	} else {
	  // echo "Error creating table: " . $conn->error;
	}

    // echo "<br>";


if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password=$_POST['passwordd'];
    $semester=$_POST['select_catalog'];
    $genderr=$_POST["gender"];
    $course=$_POST['test'];
    // $body = "Name: $name <br> E-Mail: $email <br> Password: $password <br> Semester: $semester <br> Gender:  $genderr" ;
    // echo $body;
    // echo "<br>";
    // echo "Course: <br>";

$courses=array();

    foreach($course as $val)
{
    // echo "Course: ".$val;
    // echo "<br>";
    array_push($courses,$val);
}
}

$list= json_encode($courses);

// echo $list;



$sql = "INSERT INTO registrations (namee, email, passwords,gender,semester,course)
VALUES ('$name', '$email', '$password','$genderr','$semester','$list')";

// echo "<br>";
?>

<div class="row mb-122">
                <div class="col-md-122">
                    <div class="card" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
                        <div class="text-white text-center d-flex align-items-center py-8 px-14 my-5">
                            <div>
<?php
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
  echo "<footer class='blockquote-footer'>Name already exists </footer> <br>";
}
?>
<img src="server.png" alt="Form logo">		

<style>
  

img {
  width: 200px;
  height: 180px;
  margin: 10px;
  align:center;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

</style>

<?php
$conn->close();
?>
<br>
<a class="btn btn-primary btn-lg" href="add.php" role="button">Show Data</a>

</div>
</div>
                    </div>
                </div>
            </div>




    </body>
    </html>