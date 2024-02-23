<style type="text/css">
	:root{
		--site-bg-col:#1565C0;
		--site-nav-pad:17.5px;
		--dimer-site-col:#3366ff;
	}
	.wd100{
		width: 100%!important;
	}

.front_div {
	width: 100%;
    /*display: inline-flex;*/
    /*overflow:hidden;*/
    /*justify-content: center;*/
    color:white;
    /*background-size: cover;*/
    background-image: url("imgs/main.jpg");
    /*background-repeat: no-repeat;*/
    /*justify-content: center;*/
    /*align-items: center;*/
    /*text-align: center;*/
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}
.front_div button{
	border-radius: 20px;
}
.pointer{
	cursor: pointer!important;
}
.sdrive_home{
	width: 100%;
	word-wrap: break-word;
}
.sdrive_home .content{
	display: flex;
	flex-wrap: wrap;
}
.sdrive_home .content .item:hover{
  box-shadow: 0 0 4px 2px rgba(0, 140, 186, 0.5);
}
.sdrive_home .content .item{
	padding: 10px;
	width: 300px;
	margin:10px;
}
.sdrive_home .content .item .introduce{
	font-size: 20px;
	font-weight: bold;
}
.sdrive_home .content .item .content{
	color: grey;
}
.btt{
	font-size: 20px;font-weight: bold;
}
.topnavver{
	background:;
	color: white;
	padding-top:var(--site-nav-pad)!important; 
	padding-bottom:var(--site-nav-pad)!important; 
	z-index: 4;
	background-color: var(--site-bg-col);
}
.topnavver .site_name{
	font-size: 20px;
	font-weight: bold;
	letter-spacing: 1px;
}
.right{
	float: right!important;
}
.left{
	float: left!important;
}
.topnavver .open_menu{
	font-size: 20px;
}
.ftb{
	font-weight: bold;
}
.upload_div{
	width: 200px;
	height: 200px;
	border-radius: 50%;
	border:0.01px solid #e0e0eb;
	/*display: flex;*/
    margin-top:10px;
    padding-top: 10px;
    justify-content: center;
    align-items: center;
}
.lekod{
	width: 250px;
	  position: absolute;
	padding-top: 60px;
	z-index: 3;
	transition: 0.5s;
	background: white;
	top: 0;
	overflow: auto;
  	right: 0;
  	left: -1000px;
  	bottom: 0;
}

.lekod .le{
	padding-left: 10px;
}
.overlay{
  background-color: rgba(0,0,0,.5);
  position: absolute;
  top: 0;
  transition: 0.5s;
  display: none;
  right: 0;
  left: 0;
  bottom: 0;
  z-index: 2;
}
.doko{
	font-size: 20px!important;
}
.doko1{
	font-size: 15px!important;
}
.someddo{
	background: var(--site-bg-col)!important;
	color: white!important;
	font-size: 17px!important;
}
.someddo1{
	font-size: 16px!important;
}
.modal1 {
  display: none; 
  position: fixed; /* Stay in place */
  z-index: 5; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  border:0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
  background-color: #fefefe;
  margin: auto;
  border-radius: 5px;
  padding: 20px;
  border: 1px solid #888;
  width: 450px;
  border:0;
}
@media(max-width: 600px){
	.modal-content1 {
		width: 340px;
	}
}
/* The Close Button */
.close1 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  position: relative;
  top:-15px;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.def_can:hover{
	background: #f8f9fa!important!important;
}
.def_can{
	background: transparent;
}
.def_error{
	color: red;
}
.my_page{
	width: 100%;
	padding: 10px;
	position: absolute;
	top: 0;
	overflow: auto;
  	right: 0;
  	left: 0;
  	margin-top: 60px;
  	bottom: 0;	
}
.below{
	margin-top: 10px!important;
}
.btn_l:hover{
	color: #212529!important;
  background-color: #e2e6ea!important;
  border-color: #dae0e5!important;
}
.dira{
	font-size: 15px;
}
.def_success{
	color: green;
}
.btn_nd_ctn{
	width: 100%;
	height: 50px;
	padding-left: 20px;
	padding-right: 20px;
	padding-top: 20px;
}
.rest_api1{
	padding: 15px;
	display: flex;
	flex-wrap: wrap;
	align-items:left;
}
@media(max-width:600px){
	.rest_api1{
		justify-content:center;
	}
}
.render{
	width: 230px;
	height: 220px;
	margin-right: 10px;
	margin-bottom:10px;
	border-radius: 5px;
	  box-shadow: 0 0.125rem 0.125rem rgba(0, 0, 0, 0.075) !important;
}
.render .top{
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	height: 180px;
	background: rgba(185, 209, 236, 0.1);
	display: flex;
    overflow:hidden;
    justify-content: center;
    color:white;
    align-items: center;
    text-align: center;
}
.render .bottom{
	padding-top: 9px;
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;
	height: 50px;
	padding:10px;
	display: flex;
}
.render .icons{
	position: relative;
	top:4px;
}
.text-dark{
	color: black!important;
}
@media(max-width:700px){
	.upper_search{
		display:none!important;
	}
}
.upper_search{
	background:var(--dimer-site-col);
	height:30px;
	width:500px;
}
</style>