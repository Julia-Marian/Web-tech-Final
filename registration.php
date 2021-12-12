<?php
session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','','jjfleet');

mysqli_select_db($con,'jjfleet');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from registration where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "Username Already Taken";
}else{
	$reg= "insert into registration(name, email, password) values ('$name','$email', '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>