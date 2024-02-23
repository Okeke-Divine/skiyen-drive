<?php

	if(isset($_GET['into'])){
		$wo = $_GET['into'];
		$ac = "text-primary";
		if($wo == "root"){
			$newf = '<button class="btn btn someddo" onclick="new_folder();"><i class="fa fa-plus"></i> New</button>
		';
		}else{
			$newf = "";
		}
	}

?>
<nav class="navbar topnavver">

<span class="site_name">
		<?php echo $site_name; ?> 
	<span class="open_menu ml-3 pointer" onclick="open_menu()"><i class="fa fa-bars"></i></span>
</span>

<div class="upper_search">


</div>

<span>
	<i onclick="setSearch();" class="pointer pe-7s-search ftb fa-2x"></i>
	<i onclick="showMyAccount();" class="pointer pe-7s-user ftb fa-2x"></i>
</span>

</nav>

	<div class="overlay" id="overlay"></div>


<div class="lekod" id="lekod">
	<div class="le">
		<br>
		<span onclick="close_menu()" class="pointer fa-2x">&times;</span>
		<br>
		<?php echo $newf; ?>
		<button class="btn btn someddo"><i class="pe-7s-cloud-upload fa-1x" style="font-weight: bold!important;"></i> Upload</button>
		<br>
		<br>

		<button class="btn btn doko <?php if($wo == 'root'){echo $ac;} ?>" onclick="_goto('folder~root');"><i class="fa fa-file"></i> All files</button><br>
		<button class="btn btn doko" onclick="_goto('item~shared-with-me');"><i class="fa fa-user-friends"></i> Shared with me</button><br>
		<button class="btn btn doko" onclick="_goto('item~recent');"><i class="fa fa-clock-o"></i> Recent</button><br>
		<button class="btn btn doko" onclick="_goto('folder~starred');"><i class="fa fa-star"></i> Starred</button><br>
		<button class="btn btn doko" onclick="_goto('item~trash');"><i class="fas fa-trash"></i> Trash</button><br>
	</div>
	<div class="divider"></div>
	<div class="le">
		<button class="btn btn doko1"><i class="doko fa fa-server"></i> 
		13.1 of 100mb used</button>
	</div>
</div>


<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
  	<span class='close1'>&times;</span>
    <span id="modal_item"></span>
  </div>

</div>

	<div class="below" id="main_content">
	
	</div>
<script type="text/javascript">
	var def = "<span class='def_error' id='def_error'></span><span class='def_success' id='def_success'></span>";
	var into_dir,email,uname;
	into_dir = '<?php echo $wo; ?>';
	uname = "<?php echo $ses_uname; ?>";
	email = "<?php echo $ses_email; ?>";
	var overlay = _('overlay');
	var leftnav = _('lekod');
	function open_menu(){
		overlay.style.display = "block";
		leftnav.style.transition = "0.5s";
		leftnav.style.left = "0px";
	}
	function close_menu(){
		overlay.style.display = "none";
		leftnav.style.transition = "0.5s";
		leftnav.style.left = "-500px";
	}
	function showModal(content){
		var modal = document.getElementById("myModal1");
		var span = document.getElementsByClassName("close1")[0];
		modal.style.display = "block";
		var modal_item = _('modal_item').innerHTML = content;
		span.onclick = function() {
		  modal.style.display = "none";
		}
	}
</script>

<script type="text/javascript">
loadPage();
function loadPage(){
	var main_content = _('main_content');
	main_content.innerHTML = "<br><br><center><i class='fa fa-pulse fa-spinner fa-5x'></i></center>";
	var xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			main_content.innerHTML = this.responseText;
			btn_nd_ctn();
		}
	}

	xhttp.open("GET","functions/dir.php?from="+into_dir,true);
	xhttp.send();
}
var btncs = '<span class="right"><i onclick="loadPage()" class="pointer fa fa-redo" style="font-size:18px;"></i></span>';
function btn_nd_ctn(){
	var btn_nd_ctn = _('btn_nd_ctn');
	btn_nd_ctn.innerHTML = btncs;
}
function new_folder(){
	var btn = "<button class='btn btn def_can mr-2 someddo1' onclick='closeModal()'>Cancel</button><button class='someddo1 someddo btn btn-primary' onclick='createFolder()'>Create</button>";
	var item = "<h6>New Folder</h6><span><br><input type='text' class='form-control' id='fname' placeholder='Folder name...'></span>"+def+"<br><span class='right'>"+btn+"</span><br><br>";
	showModal(item);
}

var modal = _("myModal1");
var span = document.getElementsByClassName("close1")[0];
var items = _('modal_item');

function closeModal(){
  modal.style.display = "none";
  items.innerHTML = "";
}


function createFolder(){
	var def_error = document.getElementById('def_error');
	var fname = _('fname').value;
	if(fname == ""){
		def_error.innerHTML = "Your folder name cannot be empty.";
	}
	else if(fname.length < 3){
		def_error.innerHTML = "Your folder name cannot be less than 3 charaters.";
	}else if(fname == "root"){
		def_error.innerHTML = "Access denied.";
	}
	else{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function (){
			if(this.readyState == 4 && this.status == 200){
			var create = '<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge"><span style="display:none;"></span>created';
				if(this.responseText == create){
					closeModal();
					showModal('<h6>Success</h6>The folder '+fname+' has been created');
					loadPage();
				}else{
					def_error.innerHTML = 'Folder already exits.';
				}
			}
		}
		xhttp.open("GET","functions/create_folder.php?folder="+fname,true);
		xhttp.send();
	}
}
function logoutm(){
	window.location = "/logout.php";
}
function clogout(){
	closeModal();
	var btn = "<button class='btn btn def_can mr-2 someddo1' onclick='closeModal()'>Cancel</button><button class='someddo1 someddo btn btn-primary' onclick='logoutm()'>Confirm</button>";
	showModal('<h6>Are you sure you want to logout?</h6>'+btn);
}
function showMyAccount(){
	var btn = '<button class="btn btn-danger" onclick="clogout()">Logout</button>';
	showModal('<h6><b>'+email+'</b></h6>'+btn);
}
function setSearch(){
	showModal('<h6>Search...</h6><input placeholder="Search..." class="form-control" name="search" id="search">');
}
window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
}
</script>
