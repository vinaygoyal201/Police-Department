<?php include 'include/db.php'; ?>
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
				<h1 class=text-center">Lost and Found</h1>
				<div class="table-responsive">
					<table class="table table-striped table-hover table-bordered table-condensed">
						<thead>
							<tr>
								<th class="danger">S.No.</th>
								<th >DDR No. - DDR Date</th>
								<th>Date of Missing</th>
								<th>Name $ Address of Missing Person</th>
								<th>Description</th>
								<th>Register At</th>
								<th>Photo</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql="SELECT * FROM missing";
								$run=mysqli_query($db,$sql);
								$count=0;
								while($row=mysqli_fetch_assoc($run))
								{
									$count++;
									?>
									<tr>
										<td>$count</td>
										<td>
											<p><?php echo "$row['ddr']"; ?></p>
											<p><?php echo "$row['ddr_date']"; ?></p>
										</td>
										<td>
											<p><?php echo "$row['date']"; ?></p>
										</td>
										<td><?php echo "$row['address']"; ?></td>
										<td><?php echo "$row['desc']"; ?></td>
										<td><?php echo "$row['reg']"; ?></td>
										<td><img src="/images/user-icon.png" class="img-responsive" ></td>
									</tr>
								}
							
						</tbody>
					</table>
				</div>
			</div>
			<?php include 'include/footer.php'; ?>
		</div>
	</body>
</html>