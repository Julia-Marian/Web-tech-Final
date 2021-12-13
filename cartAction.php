<<<<<<< HEAD
<?php 
session_start(); 
$con = mysqli_connect('localhost','id18107132_root','u]}[FXgl~Dn\n6k8','id18107132_jjfleet');

mysqli_select_db($con,'id18107132_jjfleet');
 
if(isset($_GET['v_id'])){ 
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
} 
 
if (isset($_POST['updateCartButton'])) { 
    $user_id = $_SESSION['id']; 
    $vehicle_id = $_POST['vehicle_id']; 
    $quantity = $_POST['quantity']; 
 
    $s = "update cart set quantity = '$quantity' where vehicle_id ='$vehicle_id'"; 
 
    $result = mysqli_query($con, $s); 
 
    if ($result) { 
        header("Location: cart.php"); 
    } else { 
        header("Location: cart.php"); 
    } 
} 
 
if (isset($_GET['deleteID'])) { 
    // retrieve the ID from the form submission 
    $user_id = $_SESSION['id']; 
    $vehicle_id = $_GET['deleteID']; 
 
    $s = "delete from cart where vehicle_id='$vehicle_id' and user_id='$user_id'"; 
 
    $result = mysqli_query($con, $s); 
 
    if ($result) { 
        header("Location: cart.php"); 
    } else { 
        echo " 
        <script>  
            alert('Unable to delete product!'); 
            window.location='cart.php'; 
        </script>"; 
    } 
} 
 
 
=======
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

>>>>>>> eb8b70e5caae4f199d035a974eb3b837d5dacb2f
?>