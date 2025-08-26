<?php

$servername = "localhost";
$database = "test"
$username = "root";
$password = "";

$Username = $_POST['Username']
$Password = $_POST['Password']

// Create connection
$conn = new mysqli('localhost', 'root', '', 'test');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

  $stmt = $conn->prepare("insert into registration(Username,Password) values(?,?)");
  $stmt->bind_param("ss", $Username,$Password);
  $stmt->execute();

   echo "Connected successfully";
   $stmt->close();
   $conn->close();
}
?>
