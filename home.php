<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include("config.php");
$check="select * from ftd_smpl_milk where Tran_Date='".date("Y-m-d")."'";
	$result=mysqli_query($db,$check);
	if(mysqli_num_rows($result)>0)
	{
		echo "";
	}
	else{
	header("location: modal.php");
	}
?>



<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>

<html lang="en">


<head>
 
   <meta charset="utf-8">

	<title>Form</title>

	<meta name="description" content="">

	<!-- Latest compiled and minified CSS -->
	
         <!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!-- Latest compiled and minified JavaScript -->
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>	

	<!-- Optional theme -->
	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">	
</head>
<body>

	<div class="container-fluid">
    
        <!-- Second navbar for categories -->

        <nav class="navbar navbar-default">

        <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

        </button>
<a class="navbar-brand" href="#">Brand</a>
        
        </div>
    
        
<!-- Collect the nav links, forms, and other content for toggling -->
        
        <div class="collapse navbar-collapse" id="navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">

        <li class="nav-item">
      <a class="btn nav-link" href="home.php">Solid Recieved</a>
    </li>	
	<li  class="nav-item">
      <a class="btn nav-link" id="hide" href="costofsolid.php" >Cost of Solid</a>
    </li>
	<li class="nav-item">
      <a class="btn nav-link disabled"  id="hide1" href="samplemilk.php">Sample Milk</a>
    </li>
	<li class="active">
      <a class="btn nav-link disabled"  id="hide2" href="localsales.php">Local Sales</a>
    </li>
	<li class="nav-item">
      <a class="btn nav-link" href="logout.php">Log Out</a>
    </li>

          
        </ul>
          
</div><!-- /.navbar-collapse -->
      
</div><!-- /.container -->
    </nav><!-- /.navbar -->
    
	
	
	</div>
	<div style=" width:750px;height:550px; position: relative; left: 300px; right:300px; top:50px; border:5px solid grey; ">

<img src="sakthifoods.png" style="width:75px; style:50px; position: relative; left: 5px;">
<img src="sakthifoods2.png" style="width:75px; style:40px; position: relative; left: 586px;">
<h1 style="position:relative; left:290px; font-size:20px;"><u>Farmer to Dock</u></h1>
<div  style=" background-color:#8080ff ; width:600px;position:relative;left:70px;height:350px;" >
<form ng-app=""  name="localsales" action="localsales.php" method="post" >
<table>
<u><h4 align="center">Local Sales</h4></u>
<tr height="35px">
<td style="color:white;">Date</td>
<td><input type="date" id="date" name="date"  style="width:380px;font-size:10pt" ng-model="date" disabled></td>
</tr>
<tr height="35px">
<td width="200px" style="color:white;">Franchise Name </td>
<td><select name="Franchise" style="width:380px;font-size:10pt" ng-model="Franchise" ng-disabled="!date">
  <option value="A.SUNGAM">A.SUNGAM</option>
  <option value="DHARAPURAM">DHARAPURAM</option>
  <option value="GANDHINAGAR">GANDHINAGAR</option>
  <option value="PALLADAM">PALLADAM</option>
</select></td>
</tr>
<tr height="35px">
<td style="color:white;">BMC Code & Name</td>	
<td><select name="bmc" style="width:380px;font-size:10pt" ng-model="bmc" ng-disabled="!Franchise">
<option value="B0000001-A SUNGAM">B0000001-A SUNGAM</option>
<option value="B0000002-MINNAGAR">B0000002-MINNAGAR</option>
<option value="B0000003-EARIPALAYAM">B0000003-EARIPALAYAM</option>
<option value="B0000004-CHANDRAPURAM">B0000004-CHANDRAPURAM</option>
<option value="B0000005-VADUGAPALAYAM">B0000005-VADUGAPALAYAM</option>
<option value="B0000006-KAMMALAPPATTI">B0000006-KAMMALAPPATTI</option>
<option value="B0000007-PONGALUR">B0000007-PONGALUR</option>
<option value="B0000008-KARADIVAVI">B0000008-KARADIVAVI</option>
<option value="B0000009-PUDHUNALLUR">B0000009-PUDHUNALLUR</option>
<option value="B0000010-KURUCHIKOTTAI">B0000010-KURUCHIKOTTAI</option>
<option value="B0000011-MADATHUKULAM">B0000011-MADATHUKULAM</option>
<option value="B0000012-KOLUMAMKONDAN">B0000012-KOLUMAMKONDAN</option>
<option value="B0000013-KALLIPALAYAM">B0000013-KALLIPALAYAM</option>
<option value="B0000014-DHARAPURAM">B0000014-DHARAPURAM</option>
<option value="B0000015-VANJIPALAYAM">B0000015-VANJIPALAYAM</option>
<option value="B0000016-KAMBILIAMPATTI">B0000016-KAMBILIAMPATTI</option>
<option value="B0000017-PUDUPPAI">B0000017-PUDUPPAI</option>
<option value="B0000018-THUMPECHCHAPALAYAM (TC PALAYAM)">B0000018-THUMPECHCHAPALAYAM (TC PALAYAM)</option>
<option value="B0000019-DEVATHUR">B0000019-DEVATHUR</option>
<option value="B0000020-K KEERANUR">B0000020-K KEERANUR</option>
<option value="B0000021-SEMMADAIPATTI">B0000021-SEMMADAIPATTI</option>
<option value="B0000022-KARUKKANKATTUPUTHUR">B0000022-KARUKKANKATTUPUTHUR</option>
<option value="B0000023-16VELAMPALAYAM">B0000023-16VELAMPALAYAM</option>
<option value="B0000024-PUNJAI PULIAMPATTI">B0000024-PUNJAI PULIAMPATTI</option>
<option value="B0000025-KONDAYANPALAYAM">B0000025-KONDAYANPALAYAM</option>
<option value="B0000026-KANAGAPURAM">B0000026-KANAGAPURAM</option>
<option value="B0000027-NALLASELLAI PALAYAM">B0000027-NALLASELLAI PALAYAM</option>
<option value="B0000028-VAYALUR">B0000028-VAYALUR</option>
<option value="B0000029-SIVANMALAI">B0000029-SIVANMALAI</option>
<option value="B0000030-GENDICOMPATTI">B0000030-GENDICOMPATTI</option>
<option value="B0000031-SANTHAPATTI">B0000031-SANTHAPATTI</option>
<option value="B0000032-OLDDHARMAPURI">B0000032-OLDDHARMAPURI</option>
<option value="B0000033-TIRUPATHUR">B0000033-TIRUPATHUR</option>
<option value="B0000034-JAGADHABI">B0000034-JAGADHABI</option>
<option value="B0000035-THOGAIMALAI">B0000035-THOGAIMALAI</option>
<option value="B0000036-BALAKUMARNAGAR">B0000036-BALAKUMARNAGAR</option>
<option value="B0000037-SINGALANTHAPURAM">B0000037-SINGALANTHAPURAM</option>
<option value="B0000038-PLANTFARM">B0000038-PLANTFARM</option>
<option value="B0000039-VAZHAPADI">B0000039-VAZHAPADI</option>
</select></td>
</tr>
<tr height="35px">
<td style="color:white;">Qty</td>
<td><input type="text" name="quantity" placeholder="enter the quantity" align="center" style="width:380px;font-size:10pt" ng-model="quantity" ng-disabled="!bmc"></td>
</tr>
<tr height="35px">
<td style="color:white;">Fat%</td>
<td><input type="text" name="fat" placeholder="enter the fat percentage" align="center" style="width:380px;font-size:10pt" ng-model="fat" ng-disabled="!quantity"></td>
</tr>
<tr height="35px">
<td style="color:white;">SNF%</td>
<td><input type="text" name="snf" placeholder="enter the quantity" style="width:380px;font-size:10pt" ng-model="snf" ng-disabled="!fat"></td>
</tr>
<tr height="35px">
<td style="color:white;">Amount</td>
<td><input type="text" name="amount"  style="width:380px;font-size:10pt" ng-model="amount" ng-disabled="!snf"></td>
</tr>
</table></br>
<div>
<button type="button"  onclick="document.getElementById('date').disabled = false;" class="btn btn-default" style="width:95px;" accesskey="a">
add
</button>
<button type="submit" name="submit2"  class="btn btn-default" style="width:95px;" ng-model="modify" ng-disabled="!amount" accesskey="m">
modify
</button>
<button type="button" name="submit2"  class="btn btn-default" style="width:95px;" ng-model="view" ng-disabled="!bmc" data-toggle="modal" data-target="#myModal" accesskey="v">
view
</button>
<button type="submit" name="delete"  class="btn btn-default" style="width:94px;" ng-model="delete" ng-disabled="!bmc" accesskey="x">
delete
</button>
<button type="submit" name="save"  class="btn btn-default" style="width:94px;" ng-model="save" ng-disabled="!amount" accesskey="s">
save</button>
<button type="submit" name="submit2"  class="btn btn-default" style="width:94px;">exit</button>
</div>
</form>


</div>

</div>

</body>
</html>
<?php
if(isset($_POST['save']))
{
	$bmc=explode("-",$_POST['bmc']);
	$insert="insert into ftd_local_sales values('".$_POST['date']."','".$_POST['Franchise']."','".$bmc[0]."','".$bmc[1]."',".$_POST['quantity'].",".$_POST['fat'].",".$_POST['snf'].",".$_POST['amount'].",'".date("Y-m-d")."','".$_SESSION['login_user']."','-','-','-');";
    if (mysqli_query($db, $insert)) {
    echo "<script type='text/javascript'>
                alert('Successfully Added');
            </script>";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($db);
}
}
include("delete.php");
?>
