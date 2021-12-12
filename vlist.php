<?php
session_start();

$con = mysqli_connect('localhost','root','','jjfleet');

mysqli_select_db($con,'jjfleet');


$s = "select * from vehicles";

$result = mysqli_query($con, $s);


?>


<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" href="styless.css">
        <link rel="stylesheet" href="boostrap/bootstrap.min.css">
        <script src="boostrap/bootstrap.min.js"></script>
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    </head>
    <body>
        <div id="container">
        	<section class="article">
	            <div class="container py-5">
	            	<a href="logout.php">LOGOUT</a>

	              <h1 class="text-center">Available Cars</h1><br>
	              <div class="row">
	              	<a href= "cart.php" class="btn btn-primary"> VIEW CART </a>
	              	<?php

	              		if (mysqli_num_rows($result) > 0){
							while ($row = mysqli_fetch_array($result)) {
								echo '<div class="gallery" data-wow-delay="0.3s">
				                    <div class="card">
				                      <img class="img-responsive image-resize" src="image/'.$row['filename'].'" alt="" class="img-fluid">
				                      <p class="pt-3"><a href="#">'.$row['name'].'</a></p>
				                      <span id="cost">'.$row['Price'].'</span>
				                      <span id="name">'.$row['description'].'</span>
				                      <small>
				                          <a href="#">2021</a>
				                          <a href="#">MANUAL</a>
				                          <a href="#">AIR CONDITION</a>
				                      </small>
				                      <a href="cartAction.php?v_id='.$row['id'].'" class="btn btn-primary"> Add to Cart</a>
				                    </div>
				                  </div>';
							};
						} else echo "No cars in database";

	              	?>
	              </div>
	             </div>
	         </section>
	     </div>
	 </body>
	 </html>


	                  
	                  



	                  












					</div>
				</div>
			</section>
		</div>
	</body>
</html>
