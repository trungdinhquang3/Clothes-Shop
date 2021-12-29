<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("../Models/db.php");
    $userName = '';
    $password = '';
    $email = '';
    $phoneNumber = '';
    $address = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phone'];
        $address = $_POST['address'];

        $query = "INSERT INTO `accounts`(`Email`, `Name`, `Password`, `Phone`, `Address`) 
            VALUES ('$email','$userName','$password','$phoneNumber','$address')";
        $response = $con->query($query);

        if (!$response) {
            echo "Couldn't add new record<br />";
        } else {
            $con->close();
            echo "Success<br/>";
        }
    }
}
