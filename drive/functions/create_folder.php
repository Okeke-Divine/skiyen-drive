<?php

	session_start();
	include("../../conn.php");
	include("../ses.php");

	if(isset($_REQUEST['folder'])){
		$folder = $_REQUEST['folder'];
		if(mkdir("../../".$api_folder."/".$ses_id_encode."/".$folder)){
			if(mysqli_query($conn,"INSERT INTO $my_folders (`id`, `uid`, `folder_name`, `time`, `deleted`, `share_type`, `modified`, `colour`, `password`) VALUES (NULL, '$ses_id', '$folder', UNIX_TIMESTAMP(), '0', 'none', UNIX_TIMESTAMP(), '', '');")){
				echo "created";
			}
		}
	}

?>