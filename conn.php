<?php
	include("conn_helper.php");
	include("auth.php");
	$server_name = "localhost";
	$db_name = "skiyen_drive";
	$s_uname = "root";
	$s_psw = "";
	$conn = new mysqli($server_name,$s_uname,$s_psw,$db_name);
?>