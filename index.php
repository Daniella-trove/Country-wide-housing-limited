<!DOCTYPE html>
<html>
<head>
	<title>Home</title> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min2.css"> 
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <style>
.image {
 /* display: relative;*/
  width: 100%;
  height: 100%;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.4); 
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease-out;
}
.box:hover  .overlay {
  width: 310px;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}
</style>
</head>
<body>
<?php 
Include 'nav.php';
?>

<div class="container">
	<div class="row" style="padding: 50px;">
		<div class="col-md-4">
			<h4 style="font-size:30px;">Search Properties</h4>
	<p>Be the first to see our homes not yet on the market, including our
	 "Coming Soon" listings, browse though our projects now.</p>
	 <img src="photo/download (2).jpg" style="width: 200px; height: 200px; border-radius: 50%;">	
		</div>
		  <div class="col-md-4 ">
			<h4 style="font-size:30px;">Contact Sales</h4>
	<p>We are here to assist you resolve any issues you may have securing your home.
	 We aim to satisfy you with any of our products.</p>	
	 <img src="photo/agent1.jpg" style="width: 200px; height: 200px; border-radius: 50%;" >
		</div>
		  <div class="col-md-4">
			<h4 style="font-size:30px;">Buy or Mortgage</h4>
	<p>We offer a variety of products to individuals within our specified target 
	market and empower them to access affordable housing.</p>	
	<img src="photo/buy-or-rent.jpg" style="width: 200px; height: 200px; border-radius: 50%;" >
		</div>
	</div>
	<center><h2 class="m-4" style="font-size:35px; padding: 10px;">Hot Sales</h2></center>
	<div class="image">
	<div class="row">
		<div class="col-md-4 box">
			<img src="photo/download (1).jpg">
			<div class="overlay">
    <div class="text">LUGBE FHA</div>
  </div>
		</div>
		<div class="col-md-4 box">
			<img src="photo/download (3).jpg" class="img1">
			<div class="overlay">
    <div class="text">LUGBE FHA</div>
  </div>
		</div>
		<div class="col-md-4 box">
			<img src="photo/milik.jpg">
			<div class="overlay">
    <div class="text">LUGBE FHA</div>
  </div>
		</div>
		</div>
	</div>
	<div class="row m-5">
		<div class="col-md-4">
			<h3 style="font-size:30px;">Useful features</h3><br>
			<i class="fa fa-umbrella" aria-hidden="true" style="color:green; font-size: 25px;"></i><span> Available in any Part in Nigeria</span><br><br>
			<i class="fa fa-list" aria-hidden="true" style="color:green; font-size: 25px;"></i><span> Property To Let, Property For Sale, Students House & Maintenance</span><br><br>
			<i class="fa fa-search" aria-hidden="true" style="color:green; font-size: 25px;"></i><span> Our Estates are constructed in a factory environment and every aspect of the building process is closely monitored to ensure high quality standards.</span><br><br>
			<i class="fa fa-users" aria-hidden="true" style="color:green; font-size: 25px;"></i><span> There are lands for Bungalows, Penthouses etc. We also undertake feasibility and viability studies of Real Estate development projects.</span><br>
		</div>
		<div class="col-md-4">
			<h3 style="font-size:25px;">Sales Representatives</h3><br>
			<img src="photo/download.jpg" style="width: 250px; height: 250px;"><br><br>
			<h6> Presently, the Company has a formidable team of Professional, Technical and Administrative Staffs supported with modern equipments who have participated in various aspects of our professional jobs and thus experienced tasks.</h6>
		</div>
		<div class="col-md-4">
			<h3 style="font-size:25px;">Security and Insurance</h3><br>
			<img src="photo/images (1).jpg" style="width: 250px; height: 250px;"><br><br>
			<h6>Owing to its unique housing delivery strategies and solid financial standing, Countrywide Concept embarked on various housing schemes aimed at providing affordable houses to Nigerians in Lugbe, the Federal Capital Territory of Nigeria.</h6>
		</div>
	</div>
</div>
<?php
Include 'footer.php'
?>
<!-- script --><!-- 
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> -->
<script src="js/java.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>