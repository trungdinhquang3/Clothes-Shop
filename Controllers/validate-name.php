<?php
  include '../Models/db.php';
  $name = $_GET['name'];
  $sql = "SELECT * FROM `accounts` WHERE `Name`='$name'";
  $result = $con ->query($sql) or  die($con->error);
  $IdRow = $result->fetch_assoc();
  $isValid = 1;
  if ($IdRow)
  {
    $isValid = 0;
  }
  echo $isValid;
?>
