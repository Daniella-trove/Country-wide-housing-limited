<!DOCTYPE html>
<html>
<head>
	<title>contact form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min2.css"> 
</head>
<body>
<?php
Include 'nav.php'
?>
<div class="container">
	<div style="margin: 100px;">
		<center>
			<h1>Contact Form</h1>
			<h5 style="color:green;">Get in Touch</h5><br>
 <i class="fa fa-phone" style="color:green; font-size: 20px;">  Call us + (234) 9054545468, + (234) 9023333380, + (234) 9099177799 </i><br><br>
 </center>
 <div class="row">
 	<div class="col-md-6">
 		<form method="post" action="">
		<label>Name</label><br>
		<input type="text" name="fullname" placeholder="Enter your Name" class="form-control"><br>
		<label>Subject</label><br>
		<input type="text" name="subject" placeholder="Subject" class="form-control"><br>
	</form>
 	</div>
 	<div class="col-md-6">
 		<label>E-mail</label><br>
		<input type="email" name="email" placeholder="Enter your email address" class="form-control"><br>
		<label>Phone Number</label><br> 
		<input type="number" name="phoneNunber" placeholder="Enter your email address" class="form-control"><br>
 	</div>
 	<center>
 	<textarea cols="100" rows="10" class="form-control" style="margin-left: 70px;"> Message</textarea><br><br>
		<input type="submit" name="submit" value="submit" class="btn btn-danger" class="form-control" style="margin-left: 50px;"><br>
	</center>
		</form>
 </div>
		
	</form>
	
	</div>
</div>
<?php
Include 'footer.php'
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>