<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="signout.js"></script>
	<script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
	<meta name="google-signin-client_id" content="127893838528-g3cfnk8s9o8ilbit563eutnut2q3hdl6.apps.googleusercontent.com" >
<style>
.navbar-default .navbar-brand {
    color: #f4511e;
}
.navbar-default .navbar-brand:hover {
	color: #f4511e;
}

.navbar {
	font-size:16px;
	color:#ff5a27d6;
	background:white;
	box-shadow: 0 3px 3px 0 rgba(60,64,67,0.302), 0 3px 5px 3px rgba(60,64,67,0.149);
}
.navbar .nav li a{
	display:block;
	color:#f4511e;
	width:auto;
	transition:all .1s ease-in-out;
}

.navbar-brand a{
	color:#ff5a27d6;
}
.navbar-right li{
	width:13%;
	height:55px;
}
.navbar-right li:hover{
	display:block;
	
	background:#ff5a27d6;
	box-shadow: 0 3px 3px 0 rgba(60,64,67,0.302), 0 3px 5px 3px rgba(60,64,67,0.149);
	cursor:mouse;
	width:13%;
	transform:scale(1.05);
}
.navbar-header {
	width:20%;
	margin-left:.5%;
}
.navbar-right{
	margin-right:0%;
	width:70%;
}
.navbar-right li a{
	padding:15%;
	padding-left:5px;
	text-align:center;
}
.navbar-default .navbar-nav > li > a:hover {
	color:#f4511e;
}
 li {
	display:block;
	padding:0;
}
.act {
	border-bottom:7px solid #ff5a27d6;
}
.navbar-header img {
  float: left;
  margin-left:2%;
  width: 60px;
  height: 55px;
  background: #555;
}
.carousel {
	position:relative;
	height:58%;
	width:72.5%;
	left:14%;
} 
.animate {
    
    animation: animatezoom 0.6s
}
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
blockquote {
	border-left:none;
}
.avt {
	width:20%;
	margin-left:2%;
	margin-right:2%;
	margin-top:5%;
}



img.avatar {
    width: 40%;
    border-radius: 50%;
}
#id03,#id02,#id01,#fpuser,#fpuser1 {
z-index: 1080 !important;	
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
		height:10%;
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}


.sidenav1 {
    width:10%;
    position: fixed;
    z-index: 1;
    top: 30%;
	height:100%;
    background:white;
    overflow-x: hidden;
    padding: 0;
	border-bottom:1px solid grey;
}
.sidenav1 ul {
	padding-left:0;
}
.sidenav1 ul a{
	transition:width 2s ease-out;
}
.sidenav1 ul a:hover{
	width:200%;
	padding-left:40%;
}
.sidenav2 ul a{
	transition:width 2s ease-out;
}
.sidenav2 ul a:hover{
	width:-200%;
	padding-left:-40%;
}
.sidenav2 ul {
	padding-left:0;
}
.sidenav1 a {
   
    text-decoration: none;
    font-size: 16px;
    color:white;
	height:9%;
	width:50%;
	padding:17%;
	margin-top:18%;
    display: block;
	
}
.sidenav2 {
    width:10%;
    position: fixed;
    z-index: 1;
    top: 30%;
    left: 95%;
	height:100%;
    background:white;
    overflow-x: hidden;
    padding: 0;
	border-bottom:1px solid grey;
}

.sidenav2 a {
    text-decoration: none;
    font-size: 16px;
    color:white;
	height:9%;
	width:50%;
    padding:17%;
	margin-top:18%;
    display: block;
}
.sp {
	margin-left:9%;
}
.ah:hover {
	cursor:pointer;
	color:red;
}
.g-signin2{
	display:block;
	margin-left:10%;
}

</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-header">
	<img src="sakthigrouplogo.jpg"> 
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Sakthi Group</a>
    </div>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="act" ><a href="index1.php">Home</a></li>
            <!--<li><a href="sflhome.php">SFL</a></li>-->
            <li><a href="abthome.php">SakthiFoods</a></li>
            <li><a href="sfslhome.php">SFSL</a></li>
			<li><a href="kcthome.php">KCT</a></li>
			<li style="margin-left:35%"><a href="logintest.php"  ><span class="glyphicon glyphicon-log-in"> Login</a></li>
        </ul>
		</div>
</nav>
<div class="container-fluid">
<div class="col-sm-4">
</div>
<div class="col-sm-12">
<div class="row">
  <div id="myCarousel" class="carousel slide space"  data-ride="carousel" >
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="arutchelvar.jpg" class="img-responsive center-block" alt="Image" style="margin-top:5.5%;">
      </div>
      <div class="item">
        <img src="company.JPG" class="img-responsive center-block" alt="Image" style="margin-top:5.5%;">
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
 </div>
 </div>
 <div class="row" style="margin-top:0;">
 <div class="col-sm-9" style="margin-left:12.78%">
  <blockquote class="text-center" style="background-color:#fbfbfb;"><h1 style="color:#ff5a27d6"><strong>SAKTHI GROUPS</strong></h1>
       <hr style="border:1px solid #ff5a27d6;width:20%;margin-top:2%;"></hr>
       <ol><p> The Sakthi Group is a reputed Industrial Conglomerate and is one of the fastest growing business groups in South India. The Sakthi Group has a strong market presence in a number of Industrial Domains with a host of group companies, institutions, trusts and foundations operating under its umbrella.<p>
       <p>These organizations have been playing a significant role in shaping the economic and social development of South India. Spreading its wings into a diverse number of Industrial, Economic and Social realms the Sakthi Group has been succeeding in its efforts to ‘create and hone value’ through its products, services and initiatives.</p>
	    <p>The group has grown from strength to strength under the able guidance of its past Chairman Dr. N. Mahalingam. Also known as "Arutchelvar", is known for his statesmanship and philanthropy. </p>
       </ol></blockquote>
	   </div>
	  </div>
   <div class="row">
 <div class="col-sm-9" style="margin-left:12.78%;height:400px;">
  <img class="avt" src="sf.PNG">
  <img class="avt" src="sfl.PNG">
  <img class="avt" src="abt.JPG">
  <img class="avt" src="kct.jpg">
 </div>
   </div>
   <div class="row text-center">
<p style="height:7%;margin:auto">©2018 Sakthi Group, India.</p>
</div>
 </div>
<div class="col-sm-4">
</div>
</div>

<div class="sidenav1">
<ul>
<li><a href="#" class="fa fa-facebook"></a></li>
<li><a href="#" class="fa fa-twitter"></a></li>
<li><a href="#" class="fa fa-google"></a></li>
<li><a href="#" class="fa fa-linkedin"></a></li>
</ul>
</div>

   </body>
   </html>