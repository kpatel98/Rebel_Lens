<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
	.fa-envelope:before {
    color: gray;
}
</style>

<?php 
 $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); 

 $ipaddress = $_SERVER['REMOTE_ADDR'];
$sqlvc = "SELECT count(vip) as vccount,vid,vip,vtime FROM visitorcounter WHERE 1";
$resultvc = mysqli_query($conn, $sqlvc);
$found=false;
	while($rowvc = mysqli_fetch_assoc($resultvc)) {
		$visitorcount=$rowvc['vccount'];

		if ($rowvc['vip']==$ipaddress) {
			$found=true;
		}
	}
	if (!$found) {
		mysqli_query($conn, "INSERT INTO visitorcounter(vip) VALUES('$ipaddress')");
	} 



$sqltotuser = "SELECT DISTINCT(vip) FROM `visitorcounter` WHERE 1";
$resulttotuser = mysqli_query($conn, $sqltotuser);
$counttotuser=mysqli_num_rows($resulttotuser);	
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171525948-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-171525948-1');
</script>


<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php"><img src="images/logo-colored.png" alt="Rebel Lens Photography" height="200px"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li class='<?php echo $curPageName=="index.php"?"fh5co-active":""; ?>'><a href="index.php">Home</a></li>
					<li class='<?php echo $curPageName=="namestatus.php"?"fh5co-active":""; ?>'><a href="namestatus.php">Name Status</a></li>
					<li class='<?php echo $curPageName=="portfolio.php"?"fh5co-active":""; ?>'><a href="portfolio.php">Photos</a></li>
					<li class='<?php echo $curPageName=="about.php"?"fh5co-active":""; ?>'><a href="about.php" onclick="return false;">About</a></li>
					<li class='<?php echo $curPageName=="contact.php"?"fh5co-active":""; ?>'><a href="contact.php" onclick="return false;">Contact</a></li>
				</ul>
			</nav>
			<div class="fh5co-footer">

				<p><small>&copy; 2020 Rebel Lens Photography. All Rights Reserved.</span> <span>Designed by <a onclick="loginauth()">#K patel</a>
				</span> <span>Photography: <a href="https://analytics.google.com/analytics/web/provision/#/report-home/a171525948w238480173p222946665" target="_blank">#Nik patel</a></span></small></p>
				<ul>
					
					
					<li><a href="https://www.instagram.com/rebel_lens9/"><i class="icon-instagram"></i></a></li>
					<li><a href="https://www.facebook.com/rebel.lens.1293"><i class="icon-facebook"></i></a></li>
					<li><a href="mailto:reblelens9s@gmail.com"><i class="fa fa-envelope"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					
					
				</ul>
			</div>

		</aside>
<script>
function loginauth() {
  var pass = prompt("Please enter your Password:");
  if (pass == "Rebel Lens") {
    location.href = 'admin/examples/dashboard.php';
  } else {
   location.href = '#';
  }
 
}
</script>