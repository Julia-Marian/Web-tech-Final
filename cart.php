
<?php
session_start();

$con = mysqli_connect('localhost','root','','jjfleet');

mysqli_select_db($con,'jjfleet');

$id = $_SESSION['id'];
$s = "select * from cart inner join vehicles on cart.vehicle_id = vehicles.id where user_id='$id'";

$result = mysqli_query($con, $s);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
   
    <title>Cart Details</title>
    <style>
        .table td, .table th {
            vertical-align: middle;}
    </style>

</head>
<body>
    <div class="container">
        <a href="index.php" class="btn btn-danger" style="margin: 20px 0 0 0;">Home</a>
        <a href="vlist.php" class="btn btn-primary" style="margin: 20px 0 0 0; float:right;"> << Continue Shopping</a>
        <h1 style="text-align:center; margin-bottom: 20px;">Your Cart Items</h1>
        <table class="table table-bordered">
            <thead class='thead-dark'>
                <tr>
                    <th></th>
                    <th> PRODUCT</th>
                    <th> QUANTITY</th>
                    <th> PRICE</th>
                    <th> COST</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $total = 0;
                if (mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_array($result)) {
                    $total = $total + $row['Price'] * $row['quantity'];
                    echo "<tr>
                        <td style='width:50px'> 
<<<<<<< HEAD
                            <a href='cartAction.php?deleteID={$row['id']}'><i class='fas fa-trash btn btn-lg text-danger'></i></a>
=======
                            <a href='../actions/cartAction.php?deleteID={$row['id']}'><i class='fas fa-trash btn btn-lg text-danger'></i></a>
>>>>>>> eb8b70e5caae4f199d035a974eb3b837d5dacb2f
                        </td>
                        <td> <img class='mr-3' src='image/{$row['filename']}' width='70px'> <strong>{$row['name']}</strong></td>
                        <td style='width:150px;'> 
                            <form method='POST' action='cartAction.php'>
<<<<<<< HEAD
                                <input style='text-align:center; width: 40px;' type='number' min='1' max='' name = 'quantity' value ='{$row['quantity']}'>
                                <input type='hidden' name = 'vehicle_id' value='{$row['id']}'>
=======
                              
                                <button style='text-align:center; width: 65px;' class='btn btn-primary btn-sm' name='updateCartButton' type='submit' > Update </button>
                             </form>
                        </td>
                        <td style='width:150px'> <strong>???" . number_format($row['Price'], 2) . "</strong> </td>
                        <td style='width:150px; color:darkred;'> <strong>???" . number_format($row['Price'] * $row['quantity'], 2) . " </strong></td>
                    </tr> 
                    ";
                }}
                $_SESSION['total'] = $total;
                ?>
                

            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style='color:darkred;'><strong><h4>Sub-Total:</strong></h4></td>
                    <td style='color:darkred;'><strong><h5>??? <?php echo number_format(
                        $total,
                        2
                    ); ?></strong></h5></td>
                </tr>
            </tfoot>
        </table>
        <a href='checkout.php' style='float:right; background-color:darkorange; color:black; border: 2px solid black;' class='btn btn-primary btn-lg' type='submit'> <strong>Proceed to Checkout >><strong></a>
        </div>
    </div>
</body>
</html>