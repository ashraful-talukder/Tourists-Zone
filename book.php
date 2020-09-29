<?php
$hostname='localhost';
$user='root';
$password='';
$db='user_db';
$con=mysqli_connect($hostname,$user,$password);
if(!$con){
	die("Connection failed: ".mysqli_connect_error());
}
// else{
// 	echo "Connection successfull";
// }
mysqli_select_db($con,$db);
?>

<!DOCTYPE html>
<html>
<head>
	<title>submission</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="bootstrap-4.3.1-dist/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="bootstrap-4.3.1-dist/js/slick.min.js"></script>
	<script type="text/javascript" src="bootstrap-4.3.1-dist/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body style="background: papayawhip">
	<?php
	if (isset($_POST['submit'])) {
		$name_info=$_POST['name'];
		$mobile_info=$_POST['mobile'];
		$email_info=$_POST['email'];
		$date_info=$_POST['date'];
		$package_info=$_POST['package'];
		$transaction_info=$_POST['transaction'];

		$query="INSERT INTO tourist(name,mobile,email,datei,package,transaction) VALUES('$name_info','$mobile_info','$email_info','$date_info','$package_info','$transaction_info')";
		$run=mysqli_query($con,$query);
		if ($run) {
			/*echo "Submission successfull";*/
		}
		else{
			echo "Error: ".$query."<br>".mysqli_error($con);
		}
	}
	mysqli_close($con);
	?>

	<!-- navbar -->
	<nav class="navbar sticky-top" style="background: rgb(88,69,87);">
		<div>
			<a href="index.html" class="navbar-brand" style="color: white"><h1>Tourists Zone</h1></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div>
			<ul class="nav justify-content-end" id="navbarSupportedContent">
				<li class="nav-item">
					<a href="index.html" class="nav-link" style="color: white"><h5>Home</h5></a>
				</li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white"><h5>Locations</h5></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a href="dhaka.html" class="dropdown-item">Dhaka</a>
						<a href="tangail.html" class="dropdown-item">Tangail</a>
						<a href="gazipur.html" class="dropdown-item">Gazipur</a>
						<a href="cumilla.html" class="dropdown-item">Cumilla</a>
						<a href="lakshmipur.html" class="dropdown-item">Lakshmipur</a>
						<a href="cox's bazar.html" class="dropdown-item">Cox's Bazar</a>
					</div>
				</li>
				<li class="nav-item">
					<a href="gallery.html" class="nav-link" style="color: white"><h5>Gallery</h5></a>
				</li>
				<li class="nav-item">
					<a href="booking.html" class="nav-link" style="color: white"><h5>Bookings</h5></a>
				</li>
				<li class="nav-item">
					<a href="about.html" class="nav-link" style="color: white"><h5>About</h5></a>
				</li>
			</ul>
	</nav>
	<div style="padding: 50px">
		<div style="background: rgb(60,60,60);width: 50%;height: 300px;margin:auto;display:flex;flex-direction:column;justify-content: center;padding:20px 40px;">
			<h1 align="center" style="color: white">Your request has been submitted</h1>
			<p align="center" style="color: white">You'll get a confirmations message soon</p>
		</div>
	</div>

	<!-- Footer -->
	<footer class="page-footer font-small special-color-dark pt-4">
		<div class="container">
			<ul class="list-unstyled list-inline text-center">
				<li class="list-inline-item">
					<a class="btn-floating btn-fb mx-1">
						<i class="fa fa-facebook fa-lg white-text mr-md-4"> </i>
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-tw mx-1">
						<i class="fa fa-twitter fa-lg white-text mr-md-4"> </i>
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-gplus mx-1">
						<i class="fa fa-google-plus fa-lg white-text mr-md-4"> </i>
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-li mx-1">
						<i class="fa fa-linkedin fa-lg white-text mr-md-4"> </i>
					</a>
				</li>
				<li class="list-inline-item">
					<a class="btn-floating btn-dribbble mx-1">
						<i class="fa fa-instagram fa-lg white-text mr-md-4"> </i>
					</a>
				</li>
			</ul>
		</div>
		<div class="footer-copyright text-center py-3">© 2018 Copyright:
			<a href="https://facebook.com/ash.talukder"> MountainMovers.com</a>
		</div>
	</footer>


</body>
</html>