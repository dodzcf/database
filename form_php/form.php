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
<body style="background-color:grey;">
<?php


?>
<style>
  
  .div_hover {
    border-radius: 25px;

    border: 10px;
    margin: 70px; 
    background-color: grey; }

.div_hover:hover { background-color: 	#505050; }
img {
  width: 200px;
  height: 120px;
  margin: 10px;
  align:center;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
h1
{
  align:center;
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>

<div class="div_hover row row-tile ">
  <br>
<form class="form-horizontal" role="form" method="post" action="index.php">
<div class="form-group">
<h1 class="animate__animated animate__flash animate__infinite	infinite col-sm-7 control-label">Registration Form</h1>
<br>
<br>
<br>
<img src="browser.png" alt="Form logo">		
<div class="col-sm-7">
</div>
</div>	
<div class="form-group">
		<label for="name" class="col-sm-2 control-label">Name</label>
		<div class="col-sm-7">
			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Email</label>
		<div class="col-sm-7">
			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-sm-2 control-label">Password</label>
		<div class="col-sm-7">
			<input type="password" class="form-control" id="passwords" name="passwordd" placeholder="password" value="">
		</div>
	</div>

<div class="form-group">
<label for="email" class="col-sm-2 control-label">Gender</label>

<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female" ) echo "checked";?>
value="female" id ="fm">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male" ) echo "checked";?>
value="male" id ="m">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other" id="o">Other

</div>

<div class="form-group">
<label for="email" class="col-sm-2 control-label">Choose Semester</label>
<select name="select_catalog" id="select_catalog">
<?php
$genders = array( '1', '2','3','4','5', '6','7','8' );
foreach( $genders as $value )
{
    $selected = ( $Gender == $value )? ' selected="selected"': '';
    echo '<option value="' . "$value" . '"' . $selected . '>' . $value . '</option>';
}
?>

</select>
</div>
<br>
<br>

<label for="courses" class="col-sm-2 control-label">Choose Courses</label>

<div class="form-group">
<div class="col-sm-10 col-sm-offset-2">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="regform";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}






$sql = "SELECT courses FROM course";
$result = $conn->query($sql);

$i=0;

$deptt=array();

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    // echo '<input type="checkbox" value="'.$row['courses'].' name="check[]" >' ."id: " . $row["courses"]. " i=".$i;
    array_push($deptt,$row['courses']);
    $i=$i+1;
    
  }
} else {
  echo "0 results";
}


    $count=10;
?>

<style>
.checkbox{
  background:green;
}

</style>
      <!-- <form action = "<?php $_PHP_SELF ?>" method = "GET"> -->
      <?php
      while($count!=0){
        $count = $count -1;
        echo '<input type="checkbox" name="test[]" value="'.$deptt[$count].' ">'.$deptt[$count];
        echo "<br>";
      
      }
      ?>
      <br>
      <!-- <input type = "submit"/> -->
      </form>


<?php

$x=0;
$selected_courses=array();

if(isset($_GET["test"]))
{
   foreach($_GET['test'] as $val)
   {
       array_push($selected_courses,$val);
       echo $selected_courses[$x];
       $x=$x+1;
       echo "<br>";
   }
}


$conn->close();
?>

<style>

#submit
{
  display:none;
}

</style>

	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<button id="submit" name="submit" type="submit" value="Send" class="btn btn-primary" >Submit</button>
      <a onclick="test()" class="btn btn-danger" id="btn2">Check</a>
		</div>
	</div>

</form>



</div>
    </body>
</html>


