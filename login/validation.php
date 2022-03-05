<?php

session_start();


$con = mysqli_connect('localhost','root','123@abc');

mysqli_select_db($con, 'user_signup');

$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from signuptable where email = '$email' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	
	$_SESSION['username'] = $email;
	header('location:index.php');
	
}else{
    header('location:login1.php');
}
?>
