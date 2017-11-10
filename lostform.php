<?php
	include "include/db.php";
	if(isset($_POST['submit'])) {
		$name=mysqli_real_escape_string($conn,strip_tags($_POST['name']));
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$suggestion=mysqli_real_escape_string($conn,strip_tags($_POST['suggestion']));
		$sql="INSERT INTO feedback (name,email,suggestion) VALUES ('$name','$email','$suggestion')";
		if(mysqli_query($conn,$sql))
		{
			echo "<script>alert('Your Feedback/Suggestion has been taken.');</script>";
		}
		else
		{
			echo "<script>alert('There is some technical issue. Please fill the form again.');</script>";
		}
	}
?>
<html>
	<head>
		<title>Jalandhar Police</title>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'/>
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/lightbox.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/lightbox.js"></script>

	</head>
	<body>
		<div class="wrapper">
			<div class="logo-menu-container">
				<div class="logo">Jalandhar Police</div>
				<div class="menu">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Our Structure</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="#" class="active">Services</a></li>
						<li class="nobg"><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
			<div class="page">
				<h1 class="text-center">Lost/Stolen Form</h1>
				<form  method="post">
					<div class="form-group">
						<label for="name">Full Name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" required>
					</div>
					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
						<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
						<label for="suggestion">Your Suggestions</label>
						<textarea  class="form-control" name="suggestion" rows="3" placeholder="Enter your message here" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</form>
			</div>
			<?php include 'include/footer.php'; ?>
		</div>
	</body>
</html>