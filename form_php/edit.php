
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script  type=“text/JavaScript” src="backend.js"></script>
</head>
<body>


<style>
body {
  background: url(https://images.unsplash.com/photo-1544306094-e2dcf9479da3) no-repeat;
  background-size: cover;
  display: grid;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.container {
  width: 30rem;
  height: 20rem;
  box-shadow: 0 0 1rem 0 rgba(0, 0, 0, .2); 
  border-radius: 5px;
  background-color: rgba(255, 255, 255, .15);
  margin:200px;
  
  backdrop-filter: blur(5px);
}
.cus{
    margin-left:40px;
}

.bt{
    margin-left:50px;
}


</style>


<form method="post">
<div class="container">
<div class="cus">
<div>
<br>
<input type="name" placeholder="name" name="name2">
</div>
<div>
<br>
<input type="password" placeholder="Password" name="pass2">
</div>
<div>
<br>
<input type="name" placeholder="Email" name="email2">
</div>

<br>

<div class="bt">
<button class="btn btn-danger" name="update">Update</button>


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
$sql = "SELECT * FROM registrations WHERE namee='$id'";

$result = $conn->query($sql);
$row = $result->fetch_assoc();


if(isset($_POST['update'])) // when click on Update button
{
    if($new_name=$_POST["name2"]=="" || $new_pass=$_POST["pass2"]=="" || $new_email=$_POST["email2"]=="")
    {
        echo "Please Enter Data";
        return;
    }
    $new_name=$_POST["name2"];
    $new_pass=$_POST["pass2"];
    $new_email=$_POST["email2"];

    $sql="UPDATE registrations set namee='$new_name', email='$new_email' , passwords='$new_pass' where namee='$id'";
    
    if ($conn->query($sql) === TRUE) {
        // echo "Record updated successfully";
        header("location:add.php");
        $conn->close();
      } else {
        echo "Error updating record: " . $conn->error;
      }

    }


?>
</div>
</div>
</div>
</form>

</body>
</html>