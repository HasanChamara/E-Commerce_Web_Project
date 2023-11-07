
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
</body>
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

$sql = "SELECT id, username, gender, email, phone, password1 FROM user";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>username</th><th>gender</th><th>email</th><th>phone</th><th>password</th></tr>";
    // output data of each row
    while($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row['id']. "</td><td>" . $row['username']. "</td><td>" . $row['gender']."</td><td>" 
        . $row['email']. "</td><td>" . $row['phone']. "</td><td>". $row['password1']."</td></tr> ";
    }
    echo "</table>";
} else {
    echo "0 result";
}

$conn->close();
?>

</body>
</html>