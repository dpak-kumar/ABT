
<?php 
include('config.php');
$table="ftd_cost_solid";
session_start(); 
$check="select * from ftd_solid_recvd_plant where Tran_Date='".date("Y-m-d")."'";
	$result=mysqli_query($db,$check);
	if(mysqli_num_rows($result)>0 && $_SESSION['role']=="procurer")
	{
		echo "";
	}
	else{
	header("location: modal.php");
	}?>





<!DOCTYPE html>

<html lang="en">


<head>
 
   <meta charset="utf-8">

	<title>Form</title>

	<meta name="description" content="">

	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>	
<script type="text/javascript">
$(document).ready(function () {
	$('#quantity').prop("disabled",true);
	$("#bmc").change(function(){
	$('#quantity').prop("disabled",$("#bmc").val()=="");
	});
	$("#franchise").change(function(){
	$('#quantity').prop("disabled",$("#bmc").val()=="");
	});
	
    $("#view").click(function(){
	    $("#date").prop("disabled", false);
		action="view";
    });
	$("#bmc").change(function(){
	if(action=="view"){
	var date1=$("#date").val();
		var fran1=$("#franchise").val();
		var bmc1=$("#bmc").val();
          $.ajax({
			 url:"select.php",
			 method:"post",
			 data:{date1:date1,fran1:fran1,bmc1:bmc1},
			 success:function(data){
				 $('#record').html(data);
				 $('#myModal').modal('show');
				 $("#quantity").prop("disabled",true);
			 }
		});
    }
});
$("#modify").click(function(){
		$("#date").prop("disabled", false);
		action="modify";
		
});
$("#bmc").change(function(){
	if(action=="modify"){
	    date1=$("#date").val();
		fran1=$("#franchise").val();
		bmc1=$("#bmc").val();
          $.ajax({
			 url:"select.php",
			 method:"post",
			 data:{date1:date1,fran1:fran1,bmc1:bmc1},
			 success:function(data){
				 $('#record1').html(data);
				 $('#myModal1').modal('show');
				 $("#quantity").prop("disabled",true);
			 }
		});
    }
});
$("#modify_u").click(function(){
	quantity1=$("#quantity_u").val();
	fat1=$("#fat_u").val();
	snf1=$("#snf_u").val();
	amount1=$("#amount_u").val();
	ramount1=$("#recovery_amount_u").val();
	$.ajax({
		url:"modify.php",
		method:"post",
		data:{date1:date1,fran1:fran1,bmc1:bmc1,quantity1:quantity1,fat1:fat1,snf1:snf1,amount1:amount1,ramount1:ramount1},
		success:function(data){
			alert(data);
			location.replace("costofsolid.php");
		}
	});
});
$("#delete").click(function(){
		$("#date").prop("disabled", false);
		action="delete";
});
$("#bmc").change(function(){
	if(action=="delete")
	{
	$("#quantity").prop("disabled",true);
	}
});
$("#bmc").change(function(){
	if(action=="delete"){
	    date1=$("#date").val();
		fran1=$("#franchise").val();
		bmc1=$("#bmc").val();
          $.ajax({
			 url:"delete.php",
			 method:"post",
			 data:{date1:date1,fran1:fran1,bmc1:bmc1},
			 success:function(data){
				 $('button[name="delete"]').attr('type', 'submit');
			 }
		});
    }
});

$("#check").change(function(){
	if($("#check").prop("checked")){
		$("#updateform").show();
	}
	else if(!$("#check").prop("checked")){
		$("#updateform").hide();
	}
});
$("#updateform").hide();
});

</script>
<script>
  function link1(){
	document.getElementById('hide1').href="samplemilk.php";
	document.getElementById('hide1').className="btn nav-link ";
	}
	function link2(){
	document.getElementById('hide2').href="localsales.php";
	document.getElementById('hide2').className="btn nav-link ";
	}
	function disableButtons(button)
	{
	document.getElementById("add").disabled=true;
	document.getElementById("modify").disabled=true;
	document.getElementById("view").disabled=true;
	document.getElementById("delete").disabled=true;
	document.getElementById("save").disabled=true;
	//document.getElementById("exit").disabled=true;
	button.disabled=false;
	}
	
	function dynamicdropdown(listindex)
    {
	//for(var i=0;i<6;i++){	
	//	document.getElementById("bmc").options[i]=null;
	//}
	//window.alert("function called");
	document.getElementById("bmc").options.length = 0;
        switch (listindex)
        {
        case "PLANT POLLACHI" :
            document.getElementById("bmc").options[0]=new Option("SELECT BMC","");
            document.getElementById("bmc").options[1]=new Option("B0000038 PLANTFARM","B0000038-PLANTFARM");
			break;
			
        case "POLLACHI" :
		
            document.getElementById("bmc").options[0]=new Option("SELECT BMC","");
            document.getElementById("bmc").options[1]=new Option("B0000002 MINNAGAR","B0000002 MINNAGAR");
            document.getElementById("bmc").options[2]=new Option("B0000003 EARIPALAYAM","B0000003 EARIPALAYAM");
            document.getElementById("bmc").options[3]=new Option("B0000004 CHANDRAPURAM","B0000004 CHANDRAPURAM");
            document.getElementById("bmc").options[4]=new Option("B0000005 VADUGAPALAYAMED","B0000005 VADUGAPALAYAM");
			document.getElementById("bmc").options[5]=new Option("B0000006 KAMMALAPPATTI","B0000006 KAMMALAPPATTI");
			document.getElementById("bmc").options[6]=new Option("B0000010 KURUCHIKOTTAI","B0000010 KURUCHIKOTTAI");
			document.getElementById("bmc").options[7]=new Option("B0000040 GENGAMPALAYAM","B0000040 GENGAMPALAYAM");
            break;
		case "DHARAPURAM" :
		
            document.getElementById("bmc").options[0]=new Option("SELECT BMC","");
            document.getElementById("bmc").options[1]=new Option("B0000013 KALLIPALAYAM","B0000013 KALLIPALAYAM");
            document.getElementById("bmc").options[2]=new Option("B0000014 DHARAPURAM","B0000014 DHARAPURAM");
            document.getElementById("bmc").options[3]=new Option("B0000015 VANJIPALAYAM","B0000015 VANJIPALAYAM");
			document.getElementById("bmc").options[4]=new Option("B0000016 KAMBILIAMPATTI","B0000016 KAMBILIAMPATTI");
			document.getElementById("bmc").options[5]=new Option("B0000010 KURUCHIKOTTAI","B0000010 KURUCHIKOTTAI");
			document.getElementById("bmc").options[6]=new Option("B0000036 BALAKUMARNAGAR","B0000036 BALAKUMARNAGAR");
            break;
		case "ODANCHATRAM" :
		
            document.getElementById("bmc").options[0]=new Option("SELECT BMC","");
            document.getElementById("bmc").options[1]=new Option("B0000018 THUMPECHCHAPALAYAM (TC PALAYAM)","B0000018 THUMPECHCHAPALAYAM (TC PALAYAM)");
            document.getElementById("bmc").options[2]=new Option("B0000021 SEMMADAIPATTI","B0000021 SEMMADAIPATTI");
            document.getElementById("bmc").options[3]=new Option("B0000028 VAYALUR","B0000028 VAYALUR");
            break;
		case "AVINASHI" :
		
            document.getElementById("bmc").options[0]=new Option("SELECT BMC","");
            document.getElementById("bmc").options[1]=new Option("B0000008 KARADIVAVI","B0000008 KARADIVAVI");
            document.getElementById("bmc").options[2]=new Option("B0000009 PUDHUNALLUR","B0000009 PUDHUNALLUR");
            document.getElementById("bmc").options[3]=new Option("B0000007 PONGALUR","B0000007 PONGALUR");
			document.getElementById("bmc").options[4]=new Option("B0000023 16VELAMPALAYAM","B0000023 16VELAMPALAYAM");
			document.getElementById("bmc").options[5]=new Option("PUNJAI PULIAMPATTI","PUNJAI PULIAMPATTI");
			break;
		case "NAMAKKAL" :
            document.getElementById("bmc").options[0]=new Option("SELECT BMC","");		    
            document.getElementById("bmc").options[1]=new Option("B0000027 NALLASELLAI PALAYAM","B0000027 NALLASELLAI PALAYAM");
            document.getElementById("bmc").options[2]=new Option("B0000029 SIVANMALAI","B0000029 SIVANMALAI");
            document.getElementById("bmc").options[3]=new Option("B0000034 JAGADHABI","B0000034 JAGADHABI");
            document.getElementById("bmc").options[4]=new Option("B0000035  THOGAIMALAI","B0000035  THOGAIMALAI");
			document.getElementById("bmc").options[5]=new Option("B0000037 SINGALANTHAPURAM","B0000037 SINGALANTHAPURAM");
			document.getElementById("bmc").options[6]=new Option("B0000039 VAZHAPADI","B0000039 VAZHAPADI");
			
            break;
		case "DHARMAPURI" :
            document.getElementById("bmc").options[0]=new Option("SELECT BMC","");		
            document.getElementById("bmc").options[1]=new Option("B0000030 GENDICOMPATTI","B0000030 GENDICOMPATTI");
            document.getElementById("bmc").options[2]=new Option("B0000032 OLDDHARMAPURI","B0000032 OLDDHARMAPURI");
            document.getElementById("bmc").options[3]=new Option("B0000033 TIRUPATHUR","B0000033 TIRUPATHUR");
            break;
        }
        return true;
    }
</script>
<script src="timestamp.js"></script>
</head>
<body ng-app="">

	<div class="container-fluid"  style="width:100%;position:relative;padding:0px;border:0px;">
    
        

        <nav class="navbar navbar-default navbar-inverse">

        <div class="container">


        <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

        </button>
<a class="navbar-brand" href="#"><?php echo $_SESSION['login_user'];?></a>
        
        </div>
    
        
        
        <div class="collapse navbar-collapse" id="navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">

        <li class="nav-item">
      <a class="btn nav-link" href="solidrecievedForm.php">Solid Recieved</a>
    </li>	
	<li  class="active">
      <a class="btn nav-link" id="hide" href="costofsolid.php" >Cost of Solid</a>
    </li>
	<li class="nav-item">
      <a class="btn nav-link disabled"  id="hide1" href="#">Sample Milk</a>
    </li>
	<li class="nav-item">
      <a class="btn nav-link disabled"  id="hide2" href="#">Local Sales</a>
    </li>
	<li class="nav-item">
      <a class="btn nav-link" href="logout.php">Log Out</a>
    </li>

          
        </ul>
          
</div>
      
</div>
    </nav>
        <p id="txt" style="color:blue;font-size:15pt;position:relative;top:-20px;"></p>
	
	
	</div>
	<div style=" width:750px;height:560px; position: relative; left: 300px; right:300px; top:50px; border:5px solid grey; ">

<img src="sakthifoods.png" style="width:75px; style:50px; position: relative; left: 5px;">
<img src="sakthifoods2.png" style="width:75px; style:40px; position: relative; left: 586px;">
<h1 style="position:relative; left:290px; font-size:20px;"><u>Farmer to Dock</u></h1>
<div style=" background-color:#8080ff ; width:600px;position:relative;left:70px;height:375px;" >

<form  name="costofsolid" action="costofsolid.php" method="post" >
<table>
<u><h3 align="center">Cost of Solid</h3></u>
<tr height="35px">
<td style="color:white;">Date</td>
<td><input class="form-control" type="date" id="date" name="date" style="width:380px;font-size:10pt" ng-model="date" disabled></td>
</tr>
<tr height="35px">
<td width="200px" style="color:white;" onkeypress="click(event)">Franchise Name </td>
<td><select id="franchise" class="form-control" name="Franchise" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);" style="width:380px;font-size:10pt" ng-model="Franchise" ng-disabled="!date">
  <option value="">Select Franchise</option>
        <option value="PLANT POLLACHI">PLANT POLLACHI</option>
        <option value="POLLACHI">POLLACHI</option>
        <option value="DHARAPURAM">DHARAPURAM</option>
		<option value="ODANCHATRAM">ODANCHATRAM</option>
		<option value="AVINASHI">AVINASHI</option>
		<option value="NAMAKKAL">NAMAKKAL</option>
		<option value="DHARMAPURI">DHARMAPURI</option>
</select></td>
</tr>
<tr height="35px">
<td style="color:white;">BMC Code & Name</td>	
<td>
	    <select name="bmc" id="bmc" class="form-control" style="width:380px;font-size:10pt" ng-model="bmc" ng-disabled="!Franchise"><option value="">Select BMC</option></select>
</td>
</tr>
<tr height="35px">
<td style="color:white;">Qty</td>
<td><input class="form-control" type="text" id="quantity" name="quantity" placeholder="enter the quantity" align="center" style="width:380px;font-size:10pt" ng-model="quantity"></td>
</tr>
<tr height="35px">
<td style="color:white;">Fat%</td>
<td><input class="form-control" type="text" name="fat" placeholder="enter the fat percentage" align="center" style="width:380px;font-size:10pt" ng-model="fat" ng-disabled="quantity>1 ||quantity<=0||!quantity" required></td>
</tr>
<tr height="35px">
<td style="color:white;">SNF%</td>
<td><input class="form-control" type="text" name="snf" placeholder="enter the quantity" style="width:380px;font-size:10pt" ng-model="snf" ng-disabled="fat>1 ||fat<=0||!fat"></td>
</tr>
<tr height="35px">
<td style="color:white;">Amount</td>
<td><input class="form-control" type="text" name="amount"  style="width:380px;font-size:10pt" ng-model="amount" ng-disabled="snf>1 ||snf<=0||!snf"></td>
</tr>
<tr height="35px">
<td style="color:white;" >Recovery Amount</td>
<td><input class="form-control" type="text" name="recovery_amount"  style="width:380px;font-size:10pt" ng-model="recovery_amount" ng-disabled="!amount"></td>
</tr>
</table></br>
<div>
<button type="button" id="add" name="add"  class="btn btn-default" style="width:95px;" onclick="document.getElementById('date').disabled=false;disableButtons(this)" accesskey="a">
Add
</button>
<button type="button" id="modify" name="submit2"  class="btn btn-default" style="width:95px;" ng-model="modify"   onclick="disableButtons(this)" accesskey="m">
Modify
</button>
<button id="view" id="view" type="button" name="submit2"  class="btn btn-default" style="width:95px;"  onclick="disableButtons(this)" ng-model="view"   accesskey="v">
View
</button>
<button type="button" id="delete" name="delete"  class="btn btn-default" style="width:94px;"  onclick="disableButtons(this)" ng-model="delete" accesskey="x">
Delete
</button>
<button type="submit" id="save" name="save"  class="btn btn-default" style="width:94px;" ng-model="save" ng-disabled="!recovery_amount" accesskey="s">
Save
</button>
<input type="reset" id="exit" name="submit2"  class="btn btn-default" style="width:94px;"  >

</input>
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
	$insert="insert into ftd_cost_solid(Tran_Date,Fran_Name,Bmc_Code,Bmc_Name,Qty,Fat,Snf,Amount,Recovery_Amt,Add_Date,Add_user,D_Flag)values('".$_POST['date']."','".$_POST['Franchise']."','".$bmc[0]."','".$bmc[1]."',".$_POST['quantity'].",".$_POST['fat'].",".$_POST['snf'].",".$_POST['amount'].",".$_POST['recovery_amount'].",'".date("Y-m-d")."','".$_SESSION['login_user']."','A');";
    if (mysqli_query($db, $insert)) {
    echo "<script type='text/javascript'>
                alert('Successfully Added');
            </script>";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($db);
}
}
include("delete.php");    
	$check1="select * from ftd_cost_solid where Tran_Date='".date("Y-m-d")."'";
	$result1=mysqli_query($db,$check1);
	if(mysqli_num_rows($result1)>0)
	{
		echo "<script>link1();</script>";
	}
	
	
	$check2="select * from ftd_smpl_milk where Tran_Date='".date("Y-m-d")."'";
	$result2=mysqli_query($db,$check2);
	if(mysqli_num_rows($result2)>0)
	{
		echo "<script>link2();</script>";
	}


?>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">VIEW</h4>
            </div>
            <div class="modal-body"  id="record">
				
            </div>
        </div>
    </div>
</div>
<div id="myModal1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">MODIFY</h4>
            </div>
            <div class="modal-body"  id="record1">
            </div>
			<div class="modal-footer">
			<input type="checkbox" id="check" class="custom-control-input" aria-hidden="true">Modify Record</input></br>
<div id="updateform">
      <form  name="costofsolid" action="costofsolid.php" method="post" >
<table>
<tr height="35px">
<td style="color:black;" align="left">Qty</td>
<td><input class="form-control" type="text" id="quantity_u" name="quantity" placeholder="enter the quantity" align="center" style="width:380px;font-size:10pt" ng-model="quantity_u"></td>
</tr>
<tr height="35px">
<td style="color:black;" align="left">Fat%</td>
<td><input class="form-control" type="text" id="fat_u" name="fat_u" placeholder="enter the fat percentage" align="center" style="width:380px;font-size:10pt" ng-model="fat_u" ng-disabled="!quantity_u"></td>
</tr>
<tr height="35px">
<td style="color:black;" align="left">SNF%</td>
<td><input class="form-control" type="text" id="snf_u" name="snf_u" placeholder="enter the quantity" style="width:380px;font-size:10pt" ng-model="snf_u" ng-disabled="!fat_u"></td>
</tr>
<tr height="35px">
<td style="color:black;" align="left">Amount</td>
<td><input class="form-control" type="text" id="amount_u" name="amount_u"  placeholder="enter the amount" style="width:380px;font-size:10pt" ng-model="amount_u" ng-disabled="!snf_u"></td>
</tr>
<tr height="35px">
<td style="color:black;" align="left">Recovery Amount</td>
<td><input class="form-control" type="text" id="recovery_amount_u" name="recovery_amount_u"  placeholder="enter the recovery amount" style="width:380px;font-size:10pt" ng-model="recovery_amount_u" ng-disabled="!amount_u"></td>
</tr>
<tr>
<td><button type="button" id="modify_u" align="left" name="modify_u" class="btn btn-danger" ng-model="modify" ng-disabled="!recovery_amount_u">Modify</button></td>
<td></td>
</tr>
</table></br>
<div>

</div>
</form>
</div>
			</div>
        </div>
    </div>
</div>

