<?php

$downid= $_POST['downid'];

ini_set( "display_errors", 0);
include 'admin/examples/conn.php';



$dcount++;
$sql = "INSERT INTO downloadcount(id,dcount) VALUES ('$downid','$dcount')";
$result = mysqli_query($conn, $sql);

// $likfind=mysqli_num_rows($resultsel);
// 	if ($likfind===0) {
// 		$sql = "INSERT INTO liked(lip,id) VALUES ('$server_ip','$photo_id')";
// 		$result = mysqli_query($conn, $sql);
// 	}
?>

