<?php

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "form";



$con = new mysqli($host, $dbUsername,$dbPassword, $dbname);

$username = $_POST['username'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password1 = $_POST['password1']; 


if(!empty($username) || !empty($gender) || !empty($email) || !empty($phone) || !empty($passwod1)){


if(mysqli_connect_error()) {
    die('connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}else{
    echo "connection is ok";
   
    $insert = "INSERT Into user(username,gender,email,phone, password1) values('$username','$gender','$email','$phone','$password1')";

    if($con->query($insert)==TRUE){
        echo "insert sucess";
    }
    else {
        echo "ERROR";
    }


}

}else{
    echo "All field are required";
    die();
}

?>