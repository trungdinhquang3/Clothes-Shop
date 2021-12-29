<?php
  include '../Models/db.php';
  $email = $_GET['email'];
  $sql = "SELECT * FROM `accounts` WHERE `Email`='$email'";
  $result = $con ->query($sql) or  die($con->error);
  $IdRow = $result->fetch_assoc();
  $isValid = 1;
  if ($IdRow)
  {
    $isValid = 0;
  }
  echo $isValid;
?>
