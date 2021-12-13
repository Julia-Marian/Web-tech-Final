<?php
session_start();

$con = mysqli_connect('localhost','root','','jjfleet');

mysqli_select_db($con,'jjfleet');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from registration where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);
$row = mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0){
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    header("Location: vlist.php");
} else{
        echo "Incorrect Login Details";
    }


?>