<?php>
 require'config2.php';
$sql="selete * from register";
$result =$conn->query($sql);
 if ($result->num_rows 0) {
 echo "<table><tr><th>username</th>gender<th></th>email</th><th>phone</th></tr>";
  while($row = $result->fetch_assoc()){
    echo"<tr><td>".$row["username"]."</td><td>".$row["gender"]." ".$row["emali"]."</td><td>" .$row["phone"]."</td></tr>;
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>