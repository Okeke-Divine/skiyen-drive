<!DOCTYPE html>
<html>
<head>
	<?php

	include("conn.php");
	include("css.php");
	include("js.php");

	?>
	<title><?php echo $site_name; ?></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font/css/all.css">
</head>
<body>

	<div style="position: fixed;top:0;right: 0;" class="mt-2 mr-2">
		<button class="btn btn text-light" onclick="_goto('i/flow/register');">Register Now</button>
		<button class="btn btn-light" onclick="_goto('i/flow/login');">Login</button>
	</div>

	<div class="front_div">
		<center>
			<br>
		<br>
		<br>
		<h3><?php echo $site_name; ?>. A new home for all your files.</h3>
		<span class="two">Register or login now to upload, backup, manage and access your files on any device, from anywhere.</span>
		<br>
		<button class="btn btn-primary mt-2" onclick="_goto('i/flow/register');">Register Now</button>
		<br>
		<br>
		<br>
		<br>
		<br>
		<i class="fa fa-angle-down pointer" onclick="_read('content');" style="font-size: 30px;"></i>
		<br>
		<br>
		</center>
	</div>
	<section class="sdrive_home">
		<div class="content" id="content">
			
			<div class="item">
				<center>
					<i class="fa fa-cloud-upload-alt fa-6x"></i>
					<br>
					<span class="introduce">Keep your files safe.</span>
				</center>
				<span class="content">If something happens to your device, you do not have to worry about losing your files or photos. <?php echo $site_name; ?> helps you keep you files in the cloud.</span>
			</div>

			<div class="item">
				<center>
					<i class="fa fa-user fa-6x"></i>
					<br>
					<span class="introduce">Individuals</span>
				</center>
				<span class="content">Store, share, and access your files and folders from any mobile device, tablet, or computer—and your first 10GB of storage are free.</span>
			</div>

			<div class="item">
				<center>
					<i class="fa fa-user-friends fa-6x"></i>
					<br>
					<span class="introduce">Teams</span>
				</center>
				<span class="content">Help your team move faster with a secure cloud-based collaboration platform that makes it easy for you to share, store, and access files.
				</span>
			</div>

			<div class="item">
				<center>
					<i class="fa fa-desktop fa-6x"></i>
					<br>
					<span class="introduce">Experience <?php echo $site_name; ?> on any device</span>
				</center>
				<span class="content">Drive works on all major platforms, enabling you to work seamlessly across your browser, mobile device, tablet, and computer.</span>
			</div>

		</div>

		<center><button class="btn btn text-secondary btt" onclick="_read('top');">Back to top</button></center>

	</section>
</body>
</html>