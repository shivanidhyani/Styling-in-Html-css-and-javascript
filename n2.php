<?php
 
require 'n1.php';
$conn    = Connect();
$fname    = $conn->real_escape_string($_POST['f_name']);
$lname   = $conn->real_escape_string($_POST['l_name']);
$course    = $conn->real_escape_string($_POST['opt_name']);
$email = $conn->real_escape_string($_POST['email']);
$address = $conn->real_escape_string($_POST['address']);
$query   = "INSERT into student(f_name,l_name,opt_name,email,address) VALUES('" . $fname . "','" . $lname . "','" . $course . "','" . $email . "','" . $address . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You you are Registered.<br>";
 
$conn->close();
 
?>