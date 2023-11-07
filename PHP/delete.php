<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$userid = $_POST['id'];

$sql = "DELETE FROM user WHERE id= $userid ";

if ($conn->query($sql) === TRUE) {
    echo "Record delete successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
  
  $conn->close();
  ?>