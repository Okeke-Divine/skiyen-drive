<!DOCTYPE html>
<html>
<head>
	<?php

		include("conn.php");

	?>
	<title>Sign In | <?php echo $site_name; ?></title>
	<link rel="stylesheet" href="../../css/material-design-iconic-font.css">
	<link rel="stylesheet" href="../../css/reg.css">
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../font/css/all.css">
</head>
<body>
<div class="main">



<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-image">
<figure><img src="../../imgs/signin-image.jpg" alt="sing up image"></figure>
<a href="register" class="signup-image-link">Create an account</a>
</div>
<div class="signin-form">

	<?php

	if(isset($_POST['signin'])){
		$email = $_POST['your_email'];
		$pass = $_POST['your_pass'];
		session_start();
		$check = mysqli_query($conn,"SELECT * FROM $users WHERE email = '$email' and password = '$pass' LIMIT 1");
		if(mysqli_fetch_assoc($check)){
			$check = mysqli_query($conn,"SELECT * FROM $users WHERE email = '$email' and password = '$pass' LIMIT 1");
			$maile = "dfosdkf932o";
			while($row = mysqli_fetch_assoc($check)){
				$_SESSION[$maile.'id'] = $row['id'];
				$_SESSION[$maile.'uname'] = $row['username'];
				$_SESSION[$maile.'psw'] = $row['password'];
				$_SESSION[$maile.'email'] = $row['email'];
				?>
					<script>window.location = '/drive/folder'; </script>
				<?php
			}

		}else{
			?>
			<div class="alert alert-danger">Your email and password do not match or is invalid.</div>
			<?php
		}
	}else{
		$email = "";
	}

	?>

<h2 class="form-title">Sign In</h2>
<form method="POST" class="register-form" id="login-form">
<div class="form-group">
<label for="your_email"><i class="fa fa-envelope"></i></label>
<input type="email" name="your_email" id="your_email" placeholder="Your Email" required="" value="<?php echo $email ;?>">
</div>
<div class="form-group">
<label for="your_pass"><i class="fa fa-lock"></i></label>
<input type="password" name="your_pass" id="your_pass" placeholder="Password" required="">
</div>
<div class="form-group">
<input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
</div>
<div class="form-group form-button">
<input type="submit" name="signin" id="signin" class="form-submit" value="Log in">
</div>
</form>
<!-- <div class="social-login">
<span class="social-label">Or login with</span>
<ul class="socials">
<li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
<li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
<li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
</ul>
</div> -->
</div>
</div>
</div>
</section>
</div>

<script type="text/javascript" async="" src="../../js/analytics.js"></script><script src="../../js/jquery.js"></script>
<!-- <script src="Sign%20Up%20Form%20by%20Colorlib_files/main.js"></script> -->

<script async="" src="../../js/regjs"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body></html>