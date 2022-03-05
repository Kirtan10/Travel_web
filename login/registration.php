<?php

session_start();


$con = mysqli_connect('localhost','root','123@abc');

mysqli_select_db($con, 'user_signup');

$name = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = " select * from signuptable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	echo"username already taken";
}else{
	$reg= " insert into signuptable(Name, Email, Password) values ('$name' ,'$email', '$password')";
	mysqli_query($con, $reg);
	header('location:login1.php');
}
?>
