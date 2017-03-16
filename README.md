# CareerCounselling
constants.php - Modify constants as per database name and login for your machine

functions.php - Include this file whenever you want to query the db. It returns a 2d array of result.

Example: 

<?php
  include ("functions.php");
  
  $result = query("Select * from Users");
  
  print_r($result);
?>
