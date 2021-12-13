<!DOCTYPE HTML>
<html>
<head>
<title>Contact Form</title>
<link href="stylec.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<!--web-fonts-->
<body>
	
		<div class="header">
			<h1>Contact Form</h1>
		</div>
		<!---header--->
		<!---main--->
			<div class="main-content">


			<?php
				$message = "";
				if (isset($_GET['error'])) {
					$message = "Please Fill in the blanks";
					echo '<div class="alert alert-danger">'.$message.'</div>';
				}


				if (isset($_GET['success'])) {
					$message = "Your message has been sent";
					echo '<div class="alert alert-danger">'.$message.'</div>';
				}


			?>
				<div class="contact-form">

					<form id="contact-form" action="contact_form.php" method="post">
						<input type="text" name="name" class="form-control" placeholder="Your name" required><br>

						<input type="text" name="email" class="form-control" placeholder="Email address" required><br>

						<input type="text" name="phone" class="form-control" placeholder="Phone number" required><br>
					
						
						<input type="text" name="subject" class="form-control" placeholder="Subject" required><br>
			
						<textarea class="form-control"placeholder="Message" name="message"></textarea><br>
			
						<input type="submit" class="form-control submit"  name= "btn-send" value="Send message">
					</form>
				</div>
			</div>
		<div class="footer-w3-agile">
			<p>&copy 2016 Stylish Contact Form . All rights reserved</p>
		</div>

		<!---main--->
</body>
</html>