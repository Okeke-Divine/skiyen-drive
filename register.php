<!DOCTYPE html>
<html>
<head>
	<?php

		include("conn.php");
		include("css.php");
		include("js.php");

		


	?>
	<title>Sign Up | <?php echo $site_name; ?></title>
	<link rel="stylesheet" href="../../css/material-design-iconic-font.css">
	<link rel="stylesheet" href="../../css/reg.css">
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../font/css/all.css">
</head>
<body>
<div class="main">

<section class="signup">
<div class="container">
<div class="signup-content">
<div class="signup-form">
	<?php
if(isset($_POST['signup'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$re_pass = $_POST['re_pass'];


		$errors = array();
		if(strlen($name) < 5){
			$errors[] = 'your user name cannot be less than 5 charaters';
		}
		if(strlen($email) < 5){
			$errors[] = 'your email cannot be less than 5 charaters';
		}
		if(strlen($pass) < 5){
			$errors[] = 'your password cannot be less than 5 charaters';
		}
		if($pass != $re_pass){
			$errors[] = 'your password and confirm password does not match';
		}

		if(empty($errors)){
			$check = mysqli_query($conn,"SELECT * FROM $users WHERE email = '$email'");
			if(mysqli_fetch_assoc($check)){
				?>
				<div class="alert alert-danger">Email Already taken</div>
				<?php
			}else{

				$register = mysqli_query($conn,"
				INSERT INTO $users (`id`, `username`, `password`, `granted_folders_num`, `email`, `account_type`, `account_next`) VALUES (NULL, '$name', '$pass', '15', '$email', 'free', '');
				");
				if($register){
					$code = rand(111111,999999);
					session_start();
					$_SESSION['reg'] = $code;
					?>
					
						<script type="text/javascript">
							window.location = "ar-<?php echo $code; ?>";
						</script>
					
					<?php

				}
	
			}

			
		}else{
			$errs = implode(", ", $errors);
			?>
			<div class="alert alert-danger">
				<?php echo ucfirst($errs); ?>
			</div>
			<?php
		}


	}else{
			$name = "";
			$email = "";
			$pass = "";
	}

	?>
<h2 class="form-title">Sign up</h2>
<form method="POST" class="register-form" id="register-form">
<div class="form-group">
<label for="name"><i class="fa fa-user"></i></label>
<input type="text" name="name" id="name" placeholder="Your Name" required="" value="<?php echo $name; ?>">
</div>
<div class="form-group">
<label for="email"><i class="fa fa-envelope"></i></label>
<input type="email" name="email" id="email" placeholder="Your Email" required="" value="<?php echo $email; ?>">
</div>
<div class="form-group">
<label for="pass"><i class="fa fa-lock"></i></label>
<input type="password" name="pass" id="pass" placeholder="Password" required="" value="<?php echo $pass; ?>">
</div>
<div class="form-group">
<label for="re_pass"><i class="fa fa-lock"></i></label>
<input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required="">
</div>
<!-- <div class="form-group">
<input type="checkbox" name="agree-term" id="agree-term" class="agree-term">
<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
</div> -->
<div class="form-group form-button">
<input type="submit" name="signup" id="signup" class="form-submit" value="Register">
</div>
</form>
</div>
<div class="signup-image">
	<figure><img src="../../imgs/signup-image.jpg" alt="sing up image"></figure>
<a href="login" class="signup-image-link">I am already member</a>
</div>
</div>
</div>
</section>

</div>

<script type="text/javascript" async="" src="../../js/analytics.js"></script><script src="../../js/jquery.js"></script>

<script async="" src="../../js/regjs"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body></html>