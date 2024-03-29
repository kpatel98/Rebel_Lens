
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="images/lens.png" />
	<title>
		Rebel Lens</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
<!-- php============================================== -->
<?php
ini_set( "display_errors", 0);
include 'admin/examples/conn.php';
$sql = "SELECT id, iname, idescription, ipath, itime FROM savedimage WHERE 1";
$result = mysqli_query($conn, $sql);
 ?>
<!-- php============================================== -->
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<?php include 'template/navbar.php'; ?>

		<div id="fh5co-main">

			<div class="fh5co-gallery">

				<?php 
				while($row = mysqli_fetch_assoc($result)) {
	    			echo '
					<a class="gallery-item" href="single.php?id='.$row['id'].'" style="border-radius: 25px;margin: 6px 6px 6px 6px;color: white;box-shadow: 6px 6px 4px gray;">

						<img src="admin/examples/'.$row['ipath'].'" alt="'.$row['name'].'">
						<span class="overlay">
							<h2><font color="#C70039"><b>Rebel Lens</b></font></h2>
							<span><font color="#FF5733 "><b>Photography</b></font></span>
						</span>
					</a>';
				}?>
				<!-- <a class="gallery-item" href="single.html">
					<img src="images/work_2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>People</h2>
						<span>7 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Sky</h2>
						<span>22 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_4.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Building</h2>
						<span>28 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_5.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>People 2</h2>
						<span>17 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_6.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Beach</h2>
						<span>34 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_7.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Vegetarian Food</h2>
						<span>10 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_8.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Travel</h2>
						<span>19 Photos</span>
					</span>
				</a>

				<a class="gallery-item" href="single.html">
					<img src="images/work_9.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Family</h2>
						<span>42 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_10.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Food</h2>
						<span>10 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_11.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Gadgets</h2>
						<span>76 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_12.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Cars</h2>
						<span>55 Photos</span>
					</span>
				</a>

				<a class="gallery-item" href="single.html">
					<img src="images/work_13.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Animals</h2>
						<span>47 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_14.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Building 2</h2>
						<span>10 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_15.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Baloon</h2>
						<span>17 Photos</span>
					</span>
				</a>
				<a class="gallery-item" href="single.html">
					<img src="images/work_16.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					<span class="overlay">
						<h2>Animals 2</h2>
						<span>22 Photos</span>
					</span>
				</a> -->
			</div>
		

			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored">Get in touch</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
					</div>
					
				</div>
			</div>

		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

