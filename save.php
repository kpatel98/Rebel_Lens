<?php
$server_ip= $_POST['server_ip'];
$photo_id= $_POST['photo_id'];

ini_set( "display_errors", 0);
include 'admin/examples/conn.php';


$sqlsel = "SELECT lid, lip, id, ltime FROM liked WHERE lip='$server_ip' and id='$photo_id'";
$resultsel = mysqli_query($conn, $sqlsel);

$likfind=mysqli_num_rows($resultsel);
	if ($likfind==0) {
		$sql = "INSERT INTO liked(lip,id) VALUES ('$server_ip','$photo_id')";
		$result = mysqli_query($conn, $sql);
	}
?>

