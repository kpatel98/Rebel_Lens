<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<style type="text/css">
	/*.tborder{
		border: solid;
	}*/
</style>

<body>

<!-- http://localhost/programs/PHP%20program/PROJECT/Rebel_Lens/insta%20followers/followread.php -->
	<!-- 
	ture &#10004; 
	false &#x2718; 
	dm &#10148;
	responce &#9993;
	like &#10084;
	circle &#9898;
	circle fill &#9898;
	-->


<table align="center">
	<tr>
		<td><input type="text" name="" id="myinsert">
		<button onclick="myFunctioninsert()">➤</button>
		</td>
	</tr>
</table>



<table class="tborder" border="1" align="center">
	<tr align="center">
		<td colspan="3">History</td>
		<td>Current</td>
		
	</tr>
	<tr>
	<th>Name</th>
	<th>Post</th>
	<th>Support</th>
	<th>Black List</th>
	<th>Story</th>
	</tr>


	<tr>
		<td><input type="text" name="" value="kpatel9899s" onClick="this.select();" readonly="" style="border: none;"></td>
		<td><button onclick="myFunctionpost()"><div id="mypost">➤</div></button></td>
		<td>38,39</td>
		<td>
			<button onclick="myFunctionblack()"><div id="myblack">✧</div></button>
		</td>
		<td>
			<button onclick="myFunctionstory()"><div id="mystory">💬</div></button>
		</td>
	</tr>

</table>

<!--➤ ✉ ❤ ✔ ✘ 🏴 ✇ ✦ ✧-->

<script>
function myFunctionpost() {
  var x = document.getElementById("mypost");

  if (x.innerHTML === "➤") {
    x.innerHTML = "✉";
  }
  else if (x.innerHTML === "✉") {
    x.innerHTML = "❤";
  }
  else if (x.innerHTML === "❤") {
    x.innerHTML = "✔";
  }
  else if (x.innerHTML === "✔") {
    x.innerHTML = "✘";
  } else {
    x.innerHTML = "✔";
  }
}

function myFunctionstory() {
  var x = document.getElementById("mystory");

  if (x.innerHTML === "💬") {
    x.innerHTML = "⚪";
    window.location.href = "write_data.php?i=story&id=50&data=⚪";
    
  }else if (x.innerHTML === "⚪") {
    x.innerHTML = "⚫";
    window.location.href = "write_data.php?i=story&id=50&data=⚫";
    
  }
  // else {
  //   x.innerHTML = "💬";
  //   window.location.href = "write_data.php?i=story&id=50&data=💬";

  // }

}
function myFunctionblack() {
  var x = document.getElementById("myblack");

  if (x.innerHTML === "✧") {
    x.innerHTML = "✦";
    window.location.href = "write_data.php?i=story&id=50&data=✦";
    
  }else{
    x.innerHTML = "✧";
    window.location.href = "write_data.php?i=story&id=50&data=✧";
    
  }
}


function myFunctioninsert() {
	var x = document.getElementById("myinsert").value;
	window.location.href = "write_data.php?i=insert&id=50&data="+x;
}



</script>





</body>
</html>