<?php 

// $fun=$_GET['i'];
// $id=$_GET['id'];
// $data=$_GET['data'];

$fun="insert";
$id=1;
$data="kpatel";


$file = fopen("page_data.txt","r");
$ind=0;
$dt=[];
while(! feof($file)){
	$ind++;
	array_push($dt, explode(",",fgets($file)));
}
fclose($file);



if ($fun=="insert") {
	array_push($dt, explode(",",($ind+1).",".$data.",➤,0,✧,💬"));
}


$file = fopen("page_data.txt", "w") or die("Unable to open file!");
foreach ($dt as $key) {
	$wdata =implode(",", $key);
	// fwrite($file,$wdata.PHP_EOL);
	// fwrite($file,$wdata."\n");
	fwrite($file,$wdata);
	
}

 fclose($file);



 ?>

 <!-- <script>window.location.href = "followread.php";</script> -->