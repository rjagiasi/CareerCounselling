# CareerCounselling
constants.php - <b>Copy this file to the original project folder</b> and then Modify constants as per database name and login for your machine. its not included in original folder coz constants would be different for everyone! 

functions.php - Include this file whenever you want to query the db. It returns a 2d array of result.

Example: 
```
<?php
  include ("functions.php");
  
  $result = query("Select * from Users");
  
  print_r($result);
?>
```
