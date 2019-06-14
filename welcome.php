<?php
   session_start();
   include("session.php");
   
?>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  background-image: url("butter.jpg");
  height:100%;  

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
a{
text-decoration:none;
}
.content {
  max-width: 1000px;
  margin: auto;
}
img {
  border-radius: 80%;
  width:100px;
}
.zoom {
  padding: 25px;
  transition: transform 0.1s;
  width: 10px;
  height: 10px;
  margin: 10px;
}

.zoom:hover {
  transform: scale(1.5);
}


.row {
  display: flex;
}

.column {
  flex:100%;
  padding: 60px;
}
</style>
</head>
	
<body>


<div class="bg">
<img src="md.jpg" align="center" width="82" height="92" > 
<h2 style="color:white">Super user</h2>
<div class="content">
<div class="row">
  <div class="column">
    <a href = "solidrecievedtable.php" >
    <div class="zoom">	
        <img src = "procurement.jpg" border="0"/> 
		<h2 style="color:black">Procurer</h2>
    </div>
    </a>
  </div>
  <div class="column">
    <a href = "#" > 
	<div class="zoom">
        <img src = "procurement.jpg" border="0"/> 
		<h2 style="color:black">stage2</h2>
	</div>
    </a>
  </div>
  <div class="column">
    <a href = "#" > 
	<div class="zoom">
         <img src = "procurement.jpg" border="0"/> 
		 <h2 style="color:black">stage3</h2>
	</div>
      </a>
  </div>
  <div class="column">
    <a href = "#" > 
	<div class="zoom">
         <img src = "procurement.jpg" border = "0"/> 
		 <h2 style="color:black">stage4</h2>
	</div>
      </a>
  </div>
</div>
<div class="row">
  <div class="column">
    <a href = "#" > 
	<div class="zoom">
        <img src = "procurement.jpg" border = "0"/> 
		<h2 style="color:black">stage5</h2>
	</div>
    </a>
  </div>
  <div class="column">
    <a href = "#" > 
	<div class="zoom">
        <img src = "procurement.jpg" border="0"/> 
		<h2 style="color:black">stage6</h2>
	</div>
    </a>
  </div>
  <div class="column">
    <a href = "#" > 
	<div class="zoom">
         <img src = "procurement.jpg" border = "0"/> 
		 <h2 style="color:black">stage7</h2>
	</div>
      </a>
  </div>
  <div class="column">
    <a href = "#" > 
    <div class="zoom">
         <img src = "procurement.jpg" border = "0"/> 
		 <h2 style="color:black">stage8</h2>
	</div>
      </a>
  </div>
</div>
</div>
</div>
   </body>
	
</html>