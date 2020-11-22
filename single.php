
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
$id=$_GET['id'];
ini_set( "display_errors", 0);
include 'admin/examples/conn.php';
$sql = "SELECT * FROM savedimage WHERE id=$id";
$result = mysqli_query($conn, $sql);
 ?>
<!-- php============================================== -->
	<div id="fh5co-page">

		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<?php include 'template/navbar.php'; ?>

		<div id="fh5co-main">

			

			<div class="fh5co-narrow-content animate-box fh5co-border-bottom" data-animate-effect="fadeInLeft">
				<?php 
				while($row = mysqli_fetch_assoc($result)) {
				echo '
				<h2 class="fh5co-heading" ><font color="red">'.$row['iname'].'</font></span></h2>
				<p><p><font color="gray">'.$row['idescription'].'</font></p></p>

				<div class="row">
					<div class="col-md-12">
						<figure><img src="admin/examples/'.$row['ipath'].'" alt="'.$row['name'].'" class="img-responsive"></figure>
					</div>
					<div class="col-md-12">
						
							
							<a href="admin/examples/'.$row['ipath'].'" download><img src="images/downloadico.png">Download</a><br>
							<font color="gray">
							Size : &ensp;'.$row['isize'].'<br>
							Image type : &ensp;'.$row['imgtype'].'<br>
							Dimensions : &ensp;'.$row['iheight'].' x '.$row['iwidth'].'</font><br>

						
					</div>
				';}?>
				
					 <!-- <div class="col-md-12">
						<figure><img src="images/big_2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
							<figcaption></figcaption>
						</figure>
					</div> -->
					<!-- <div class="col-md-12">
						<figure><img src="images/big_3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive"></figure>
					</div> -->
					<div class="col-md-12">
					<p class="text-center"><a href="portfolio.php" class="btn btn-primary">More Photos</a></p>
					</div>
					
				</div>

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
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
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

