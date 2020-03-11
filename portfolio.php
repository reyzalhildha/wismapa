<!-- <?php
	// if ( !isset($_SESSION['login']) ) {
	// 	echo "<script> alert('Anda Belum Login'); </script>";
	// 	echo "<script> window.location.href='index.php'; </script>";
	// }
?> -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="portfolio.css" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
</style>
</head>
<body>
<br>
<!-- MAIN (Center website) -->
<div class="main">

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('regular')"> Regular</button>
  <button class="btn" onclick="filterSelection('deluxe')"> Deluxe</button>
  <button class="btn" onclick="filterSelection('vip')"> VIP</button>
  <a href="index.php"><button class="btn-home">Home</button></a>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
		<!-- REGULAR -->
<a href="portfolio.php">
  <div class="column regular">
    <div class="content">
    <img src="images/img_mountains.jpg" alt="Mountains" style="width:100%">
      <h4>Regular 1</h4>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>Jl Awiligar Raya 2, Cimenyan, Dago Pakar, Dago, Bandung</td>
		</tr><br>
		<div class="w3-text-red">
		<tr>
			<td>Price</td>
			<td>:</td>
			<td>IDR 450.000</td>
		</tr>
		</div>
    </div>
  </div>
</a>
<a href="portfolio.php">
  <div class="column regular">
    <div class="content">
    <img src="images/img_lights.jpg" alt="Lights" style="width:100%">
      <h4>Regular 2</h4>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>Jl Awiligar Raya 2, Cimenyan, Dago Pakar, Dago, Bandung</td>
		</tr><br>
		<div class="w3-text-red">
		<tr>
			<td>Price</td>
			<td>:</td>
			<td>IDR 450.000</td>
		</tr>
		</div>
    </div>
  </div>
</a>
		<!-- Deluxe -->
<a href="portfolio.php">
  <div class="column deluxe">
    <div class="content">
      <img src="images/img_snow.jpg" alt="Snow" style="width:100%">
      <h4>Deluxe</h4>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>Jl Awiligar Raya 2, Cimenyan, Dago Pakar, Dago, Bandung</td>
		</tr><br>
		<div class="w3-text-red">
		<tr>
			<td>Price</td>
			<td>:</td>
			<td>IDR 450.000</td>
		</tr>
		</div>
    </div>
  </div>
</a>
		<!-- VIP -->
<a href="portfolio.php">

  <div class="column vip">
    <div class="content">
      <img src="images/maxresdefault.png" alt="welcome" style="width:100%">
      <h4>VIP</h4>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>Jl Awiligar Raya 2, Cimenyan, Dago Pakar, Dago, Bandung</td>
		</tr><br>
		<div class="w3-text-red">
		<tr>
			<td>Price</td>
			<td>:</td>
			<td>IDR 450.000</td>
		</tr>
		</div>
    </div>
  </div>
</a>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

		
	
</body>
</html>
