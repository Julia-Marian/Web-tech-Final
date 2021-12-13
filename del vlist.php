<?php
					$sql = "SELECT *  FROM vehicles";
					$result = mysqli_query($connect,$sql);
					if (mysqli_num_rows($result) > 0){
					    // output data of each row
					    while($row = mysqli_fetch_array($result)) {


				echo
	                '<div class="gallery" data-wow-delay="0.3s">
	                    <div class="card">
	                      <img class="img-responsive image-resize" alt="" class="img-fluid" src="(';?> <?php echo $row["filename"];?> <?php echo')" >
	                      <p class="pt-3"><a href="#">SUV 1500</a></p>
	                      <span id="pice">';?> <?php echo $row["price"];?> <?php echo'</span>
	                      <span id="name">';?> <?php echo $row["name"];?> <?php echo'</span>
	                      <span id= "specifications"> ';?> <?php echo $row["spec"];?> <?php echo'</span>
	                    </div>
	                  </div>';
	              }
	          }



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
	                  <div class="gallery" data-wow-delay="0.3s">
	                    <div class="card">
	                      <img class="img-responsive image-resize" src="image/SUV2.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2020 Nissan Kicks</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                    <div class="card">
	                      <img class="img-responsive image-resize" src="image/SUV3.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2020 Nissan Murano</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>

	                  <br><br>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/honda1.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2022 honda crv</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/hs.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2021 Hyundai Sonata</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/hyunSF.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2015 hyundai santa fe</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>

	                  <br><br>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/HT.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2021 Hyundai Tucson</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/Genesis.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">Genesis-G80-Sport-1</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/hs3.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2021-hyundai-sonata</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>


	                  <br><br>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/HE.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2021 Hyundai Elantra</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/hs4.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2021-Hyundai-Sonata</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/bmw.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2020-BMW</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>



	                  <br><br>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/m.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2021 Mercedes Benz</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/range.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2021-Range Rover</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>
	                  <div  class="gallery" data-wow-delay="0.3s">
	                  <div class="card">
	                      <img class="img-responsive image-resize" src="image/ford.jpg" alt="" class="img-fluid">
	                      <p class="pt-3"><a href="#">2020-Ford SUV</a></p>
	                      <span id="cost">2000$</span>
	                      <span id="name">HATCHBACK</span>
	                      <small>
	                          <a href="#">2021</a>
	                          <a href="#">MANUAL</a>
	                          <a href="#">AIR CONDITION</a>
	                      </small>
	                    </div>
	                  </div>






	                  












					</div>
				</div>
			</section>
		</div>
	</body>
</html>
