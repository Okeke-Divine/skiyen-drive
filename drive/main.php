<?php

	session_start();
	include("../conn.php");
	include("ses.php");
	

	if($logged_in == 0){

	}else{

?>
<!DOCTYPE html>
<html>
<head>
	<?php
	include("../css.php");
	include("../js.php");
	include("info.php");

	?>
	<title><?php echo $ses_uname; ?> | My Drive | <?php echo $site_name; ?></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/cee.css">
	<link rel="stylesheet" type="text/css" href="../font/css/all.css">
	<link rel="stylesheet" type="text/css" href="../font/css/v4-shims.css">
	<link rel="stylesheet" type="text/css" href="../font/css/svg-with-js.css">
	<link rel="stylesheet" type="text/css" href="../font/css/solid.css">
	<link rel="stylesheet" type="text/css" href="../font/css/regular.css">
	<link rel="stylesheet" type="text/css" href="../font/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../font/css/brands.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
</head>
<body>


	<?php

	include("next.php");

	?>

	<script type="text/javascript" src="../js/sweetalert.js"></script>
	<script type="text/javascript" src="../js/cee.js"></script>
</body>
</html>
<?php
	}
?>

