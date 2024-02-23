<?php

echo '<span style="display:none;">';
$maile = "dfosdkf932o";
$ses_id = $_SESSION[$maile.'id'];
$ses_id_encod = sha1($ses_id);
$ses_id_encode = md5($ses_id_encod);
$ses_uname = $_SESSION[$maile.'uname'];
$ses_psw = $_SESSION[$maile.'psw'];
$ses_email = $_SESSION[$maile.'email'];
echo "</span>";
	$logged_in = 0;
	
	if(!empty($ses_id) && !empty($ses_uname) && !empty($ses_email) && !empty($ses_psw)){
		$logged_in = 1;
	}
	if($logged_in == 0){
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>Please Login | <?php echo $site_name; ?></title>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
		</head>
		<body>

			<div class="jumbotron">
				<h3>Please <a href='/i/flow/login'>login</a> to continue.</h3>
			</div>
		
		</body>
		</html>

		<?php
	}

?>