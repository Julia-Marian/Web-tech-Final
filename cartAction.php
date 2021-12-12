<?php
session_start();

$con = mysqli_connect('localhost','root','','jjfleet');

mysqli_select_db($con,'jjfleet');

$user_id = $_SESSION['id'];
$vehicle_id = $_GET['v_id'];
$quantity = 1;

$s = "INSERT INTO `cart`(`vehicle_id`, `user_id`, `quantity`) VALUES ('$vehicle_id','$user_id','$quantity')";

$result = mysqli_query($con, $s);

if ($result){
        echo "
        <script> 
            alert('Product added to cart!');
            window.location='vlist.php';
        </script>";
  } else echo "
        <script> 
            alert('Product already in cart! Update quantity from your cart.');
            window.location='vlist.php';
        </script>";

if(isset($_POST['updateCartButton'])){

    $user_id = $_SESSION['id'];
    $p_id = $_POST['p_id'];
    $quantity = 1;

    $s = "INSERT INTO `cart`(`vehicle_id`, `user_id`, `quantity`) VALUES ('$vehicle_id','$user_id','$quantity')";

    $result = mysqli_query($con, $s);

    if ($result){
        echo "
        <script> 
            alert('Product added to cart!');
            window.location='vlist.php';
        </script>";
    } else echo "
        <script> 
            alert('Product already in cart! Update quantity from your cart.');
            window.location='vlist.php';
        </script>";
    }

?>