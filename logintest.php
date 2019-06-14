<?php
   include("config.php");
   session_start();
   
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM employeelogin WHERE username = '$myusername' and passcode = '$mypassword' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		 
$sql1="select * from employeelogin where username='$myusername' and passcode='$mypassword'";
$result1=mysqli_query($db,$sql1);
$row=mysqli_fetch_array($result1);
$_SESSION['role']=$row[1];
echo $row[1];
         $_SESSION['login_user'] = $myusername;
		 if($row[1]=="md"){
         header("location: welcome.php");
		 
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   }
      if(isset($_POST['submit1'])) {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($db,$_POST['username1']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password1']); 
      
      $sql = "SELECT id FROM employeelogin WHERE username = '$myusername' and passcode = '$mypassword' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
		 
$sql1="select * from employeelogin where username='$myusername' and passcode='$mypassword'";
$result1=mysqli_query($db,$sql1);
$row=mysqli_fetch_array($result1);
$_SESSION['role']=$row[1];
         $_SESSION['login_user'] = $myusername;
		 if($row[1]=="procurer"){
         header("location: solidrecievedForm.php");
		 
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
   }
   

   
     
   
 
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ABT Dairy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script>
         <!--
            function Redirect() {
               window.location = "index.php";
            }
         //-->
      </script>


<style type="text/css">
  
body{
  background-image: url(sakthi_brands.jpg);
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
}







</style>



</head>
<body>

<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 5%;">
  <div class="row" style="position:relative; top:-30px;">
    <div class="col-sm-4"> </div>
<div class="col-md-4">
  
<h1 class="text-center text-success"> Login </h1>
<br/>

<div class="col-sm-12">

  <ul class="nav nav-pills" >



    <li class="" style="width:33%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#home">SuperUser</a></li>
   
    <li class=" " style="width:33%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu1">Procurer</a></li>
    <li class=" " style="width:32%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu2">Stage-3</a></li>
	</br>
    <li class=" " style="width:33%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu3">Stage-4</a></li>
    <li class=" " style="width:33%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu4">Stage-5</a></li>
    <li class=" " style="width:32%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu5">Stage-6</a></li>
	
	
	
	
	



  </ul>

<br/>


  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      
<form action="logintest.php" method="post">

  <div class="form-group">
    <label for="UserName">UserName:</label>
    <input type="text" name="username" class="form-control" id="email" required>
  </div>
  
  

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd" required>
  </div>

  



  <button type="submit" name="submit" class="btn btn-default btn-lg" >Submit</button>
  
<button type="submit" class="btn btn-default btn-lg" onclick="Redirect();">Home</button>

</form>
<br/>



    </div>

    <div id="menu1" class="tab-pane fade">

<form action="logintest.php" method="post">

  <div class="form-group">
    <label for="UserName">UserName</label>
    <input type="text" name="username1" class="form-control" id="email" required>
  </div>
  

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password1" class="form-control" id="pwd" required>
  </div>

 <button type="submit" name="submit1" class="btn btn-default btn-lg">Submit</button>
 
<button type="submit"   class="btn btn-default btn-lg" onclick="Redirect();">Home</button>

</form>
<br/>
</div>
	 

<div id="menu2" class="tab-pane fade">

<form action="logintest.php" method="post">

  <div class="form-group">
    <label for="UserName">UserName</label>
    <input type="text" name="username2" class="form-control" id="email" required>
  </div>
  

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password2" class="form-control" id="pwd" required>
  </div>

 <button type="submit" name="submit2" class="btn btn-default btn-lg">Submit</button>
 <button type="submit" name="Home" class="btn btn-default btn-lg" onclick="Redirect();">Home</button>

</form>
<br/>
     </div>
   </div>
  </div>
</div>
</div>

</body>
</html>


