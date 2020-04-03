<?php

session_start();
header('location:login.php');


$con = mysqli_connect('localhost' , 'root');
if($con){
	echo "Connect is ok";
} else
{
	echo"No ";
}


mysqli_select_db($con, 'foodie');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
echo "$name, $email, $password";
$q1 = "select * from customer where email= '$email'";
$row = mysqli_query($con, $q1);

$num = mysqli_num_rows($row);

if($num == 1){
	echo "Email is registered already";
}else {
		mysqli_query($con, "INSERT INTO customer VALUES('','$name','$email','$password')");
}

?>

