<!doctype html>
<html>
<head>
<head>
		<meta charset="UTF-8">
		<meta name="author" content="Sabina Johnson">
		<meta name= "description" content="PHP file.">
		<meta name= "keywords" content="pets, aninmal shelter, dogs, cats, no-kill">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--
			Final Project - PetsToGo
			July 26, 2022
		-->
		<title>Thank You</title>
		
		<!--Bootstrap link-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		
		<!--link to style and structure sheets-->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="structure.css">
	
		<!--Link to paw print font-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<style>
			
			.thank-you {
				text-align: center;
				padding-top: 3em;
			}
	
		</style>
		
</head>
<body>
	
	<!-- Header -->
	<header>
			<div class="container-flex">
				<div class="row">
          			<div class="col">
			
				<div id="demo" class="carousel slide" data-ride="carousel">

				<!-- Indicators -->
				  <ul class="carousel-indicators">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				  </ul>

				<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
						  <img class="desktopSize" src="images/dog_banner_web.jpg" alt="Dog Portrait" width="1100" height="500" title="white dog">
							<img class="mobileSize" src="images/dog_banner_three_mobile.jpg" alt="Dog Portrait" width="1100" height="500" title="white dog">
							<div class="container">
							  <div class="carousel-caption text-left">
								<h1 class="header-display">Adopt the perfect pet.</h1>
								<p class="header-display">Search adoptable pets from our shelters.</p>
								<p><a class="btn btn-lg btn-primary" href="gallery.html" role="button">Adopt</a></p>
							  </div>
							</div>
						</div>
						<div class="carousel-item">
						  <img class="desktopSize" src="images/cat_banner_web.jpg" alt="Cat" width="1100" height="500" title="cat">
						  <img class="mobileSize" src="images/cat_banner_two_mobile.jpg" alt="Cat" width="1100" height="500" title="cat">

							<div class="container">
							  <div class="carousel-caption text-left">
								<h1 class="header-display">Volunteer with us.</h1>
								<p class="header-display">Choose to change the world for homeless pets.</p>
								<p><a class="btn btn-lg btn-primary" href="contact_us.html" role="button">Volunteer</a></p>
							  </div>
							</div>
						</div>
						<div class="carousel-item">
						  <img  class="desktopSize" src="images/dog_banner_two_web.jpg" alt="Dog smiling" width="1100" height="500" title="golden retriever">
							<img class="mobileSize" src="images/dob_banner_two_mobile.jpg" alt="Dog smiling" width="1100" height="500" title="golden retriever">
							<div class="container">
							  <div class="carousel-caption text-left">
								<h1 class="header-display">Donate and Sponsor</h1>
								<p class="header-display">Your donations save lives. It's really that simple.</p>
								<p><a class="btn btn-lg btn-primary" href="contact_us.html" role="button">Donate</a></p>
							  </div>
							</div>
						</div>
						</div>

						  <!-- Left and right controls -->
						 <a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						 </a>
						 <a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						 </a>
						</div>
					</div>
				</div>
			</div>
		</header>
	<!-- Header -->
	
	<!-- Nav -->
	<nav class="navbar navbar-expand-lg navbar-light">
		  <a class="navbar-brand" href="index.html"> <i class="fa fa-paw"></i> Pet's To Go</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
			  <a class="nav-item nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
			  <a class="nav-item nav-link" href="about.html">About</a>
			  <a class="nav-item nav-link" href="our_pets.html">Our Pets</a>
			  <a class="nav-item nav-link" href="gallery.html">Gallery</a>
			  <a class="nav-item nav-link" href="contact_us.html">Contact Us</a>
			</div>
		  </div>
		</nav>
	<!-- Nav -->
	
	<!-- Main -->
	<main>
		<div class="container">
		<div class="row thank-you">
			<div class="col">
			<h1>Thank You!</h1>
				<h2>The form was submitted successfully.</h2>
				<p>
					We will get back to you as soon as we can, in the mean time, click around our site to learn more about our animal shelter.
				</p>
			</div>
		</div>
			
		<div class="row">
			<div class="col">
			<img  src="images/dog-photography-1551698_1920.jpg" alt="White lab" title="White lab" width="80%">
			</div>
		</div>
		</div>
	</main>
	<!-- Main -->
	
<!-- Footer -->
	<footer class="text-center text-lg-start bg-light text-muted">
  
		  <!-- Section  -->
		  <section class="footer">
			<div class="container text-center text-md-start mt-5">
			  <div class="row mt-4">
				  
				<!-- column 1: Hours -->
				<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
				  <!-- Content Hours -->
				  <h6 class="text-uppercase fw-bold mb-4">Hours</h6>
					<p>Sun: 12:00 pm - 5:00 pm</p>
					<p>Mon – Thur: 10:00 am - 7:00 pm</p>
					<p>Fri: 10:00 am - 4:00 pm</p>
					<p>Sat: 9:00 am - 5:00 pm</p>
				</div><!-- close col 1-->

				  
				  <!-- column 2: Contact -->
				<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 p-format">
				  <!-- Links -->
				  <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
				  <p>Pets To Go Animal Shelter</p>
				  <p>
					  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi 		bi-house-heart-fill" viewBox="0 0 16 16">
				  		<path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
				  		<path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
					  </svg>
				
					  3183 S Veterans Pkwy, Springfield, Illinois 62704</p>
				  <p>
					  
					 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
					  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
					</svg>
					  
					  PetsToGo@gmail.com</p>
				  <p>
					  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
					</svg>
					  
				      (217) 698-3091</p>
				</div> <!-- close col 2-->
				  
				 <!-- column 3: Links -->
				  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 p-format footer-link">
					  <!-- Content Links -->
					  <h6 class="text-uppercase fw-bold mb-4">Helpful Links</h6>
					  <p><a href="contact_us.html">Contact Us</a></p>
					  <p><a href="about.html">Donate</a></p>
					  <p><a href="our_pets.html">Volunteer</a></p>
					  <p><a href="gallery.html">Adopt</a></p>
					  <p><a href="#top">Back to Top</a></p>
				  </div> <!-- close col 3-->
				  
				  <!-- column 4: Picture -->
				  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
				  	<img src="images/footer.jpg" alt="Cat with Dog" title="dog and cat">
				  </div> <!-- close col 4-->
				  
			  </div> <!-- close row-->
			</div> <!-- close container-->
		  </section><!-- close section-->
		  <!-- Section-->

		  <!-- Copyright -->
		  <div class="text-center copyright">
			© 2022 Copyright:
			<a class="text-reset fw-bold" href="#">Pets To Go Animal Shelter</a>
		  </div>
		  <!-- Copyright -->
		</footer>
<!-- Footer -->
	
		<p>RESULT WILL DISPLAY BELOW THIS LINE</p>
		<hr>
		<p>&nbsp;</p>

	<?php

		echo "<p class='colorRed'>Thank you for your submission.</p>";

		//It will create a table and display one set of name value pairs per row
			echo "<table border='1'>";
			echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
			foreach($_POST as $key => $value)
			{
				echo '<tr class=colorRow>';
				echo '<td>',$key,'</td>';
				echo '<td>',$value,'</td>';
				echo "</tr>";
			} 
			echo "</table>";
			echo "<p>&nbsp;</p>";

	?>
	
</body>
</html>