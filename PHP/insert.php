<?php


$username = $_POST['username'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password1 = $_POST['password1']; 


if(!empty($username) || !empty($gender) || !empty($email) || !empty($phone) || !empty($password1)){

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "form";

// Create connection
$con = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);

}else{
    echo "connection is ok";
    //$SELECT = "SELECT email From registerr where email = ? Limit 1";
    $insert = "INSERT Into user (username,gender,email,phone,password1) values('$username', '$gender','$email','$phone''$password1')";

if($con->query($insert)==TRUE){
    echo "insert sucess";
}
else{
    echo " ERROR";
}

    //Prepare statement
/*
    $stmt = $conn ->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result(); 
    $rnum = $stmt->num_rows;*/
}

}else{
    echo "All field are required";
    die();
}

?>