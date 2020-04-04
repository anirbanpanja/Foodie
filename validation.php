<?php

session_start();

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
$q1 = "select * from customer where email= '$email' && password= '$password'";
$row = mysqli_query($con, $q1);

$num = mysqli_num_rows($row);

if($num == 1){
	
	$_SESSION['email'] = $email;
	header('location:index.php');
	// echo $_SESSION['name'];
	// echo "$name , $email, $password";

}else {
		header('location:login.php');
}

?>

