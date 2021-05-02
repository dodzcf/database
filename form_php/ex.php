<?php
   if( $_GET["name"] ) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['name']. " years old.";
      
      foreach($_GET['name'] as $key)
      {
          echo "Yes".$key;
      }

      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name[]" />
         Age: <input type = "text" name = "name[]" />
         <input type = "submit" />
      </form>
      
   </body>
</html>