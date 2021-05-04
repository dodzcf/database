<html>
<head>
	<title>Result</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body style="background-color:#089">
<h2 style="color: #066506">Results</h2>


Department of  <?php echo $_POST["deptt"]; ?><br>










<?php 

$rolling=$_POST["deptt"];

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
    // echo "connected to server";
}
echo "<br>";
$sql = "SELECT * FROM `registrations` where department = '$rolling'";
$result = $conn -> query($sql);







?>



<table class="table">
        <thead>
        <tr>
            <th>Roll Number</th>
            <th>Email</th>
            <th>Department</th>
            <th>Event</th>
        </tr>
        </thead>

        <tbody>
        <?php
 

        $rows = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row) {
            echo '<tr>
               <td>'.$row["roll_no"].'</td>
               <td>'.$row["email"].'</td>
               <td>'.$row["department"].'</td>
               <td>'.$row["eventt"].'</td>
             
            </tr>';
          }
        


        ?>




        </tbody>
    </table>







<?php
    $conn->close();

?>

</body>
</html>