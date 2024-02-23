<div class="btn_nd_ctn" id="btn_nd_ctn">

</div>
<div class="rest_api1">
<?php

	function empty_dir(){
		return '<center>
			<br>
			<div class="upload_div pointer">
				<br>
				<br>
				<i class="pe-7s-cloud-upload fa-4x"></i>
				<br>
				Drag files here or click to upload.
			</div>
		</center>';
	}

	if(isset($_REQUEST['from'])){
		session_start();
		include("../../conn.php");
		include("../../css.php");
		include("../ses.php");
		$from = $_REQUEST['from'];

		if($from == "root"){

	$cf = mysqli_query($conn,"SELECT * FROM $my_folders WHERE uid = '$ses_id' ORDER BY folder_name ASC");
	if(mysqli_num_rows($cf) > 0){
		while($cf1 = mysqli_fetch_array($cf)){
			$fname = $cf1['folder_name'];
			$fid = $cf1['id'];
			?>

			<div class="render pointer" onclick="_goto('folder~<?php echo $fname; ?>');">
				<div class="top">
					<i class="pe-7s-folder fa-6x text-dark"></i>
				</div>
				<div class="bottom text-left">
					<i class="pe-7s-folder icons"></i>
					<span class="text-dark"><?php echo $fname; ?></span>
				</div>
			</div>

			<?php
		}
	}else{
		empty_dir();
	}

}else{
	echo "other folders loading";
}
?>
<?php
	}
?>
</div>