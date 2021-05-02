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


      <form action = "<?php $_PHP_SELF ?>" method = "GET">
      <?php
      while($count!=0){
        $count = $count -1;
        echo '<input type="checkbox" name="test[]" value="'.$deptt[$count].' ">'.$deptt[$count];
        echo "<br>";
      
      }
      ?>
      <br>
      <input type = "submit"/>
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