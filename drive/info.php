<?php

$infoapi = mysqli_query($conn,"SELECT * FROM $user_info WHERE user_id = '$ses_id' LIMIT 1");
if(mysqli_fetch_assoc($infoapi)){

$infoapi = mysqli_query($conn,"SELECT * FROM $user_info WHERE user_id = '$ses_id' LIMIT 1");
while($infoapis = mysqli_fetch_array($infoapi)){
	$dis = $infoapis['dir_is_created'];
	if($dis == 0){
		if(mkdir("../".$api_folder."/".$ses_id_encode)){
			update_infon('dir_is_created','1');
		}
	}
}

}else{
	mysqli_query($conn,"INSERT INTO $user_info (`user_id`) VALUES ('$ses_id');");
}

	function update_infon($row,$con){
		include("ses.php");
		include("../conn.php");
		mysqli_query($conn,"UPDATE $user_info SET `".$row."` = '".$con."' WHERE `user_id` = '$ses_id' LIMIT 1 ;");
	}

?>