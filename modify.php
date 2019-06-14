<?php
session_start();
include('config.php');
if(isset($_POST['date']) && isset($_POST['fran']) && isset($_POST['bmc']) && isset($_POST['tanker']) && isset($_POST['quantity']) && isset($_POST['fat']) && isset($_POST['snf']) )
{
	$Tanker_No=$_POST['tanker'];
	$Qty=$_POST['quantity'];
	$Fat=$_POST['fat'];
	$SNF=$_POST['snf'];
	$Tran_Date=$_POST['date'];
	$date=date("Y-m-d");
	$Mody_User=$_SESSION['login_user'];
	$bmc=explode("-",$_POST['bmc']);
	$Fran_Name=$_POST['fran'];
	$sql="UPDATE ftd_solid_recvd_plant SET Tanker_No='".$Tanker_No."', Qty='$Qty', Fat='$Fat' , Snf='$SNF' , Mody_Date='$date' , Mody_User='$Mody_User',D_Flag='M' WHERE Fran_Name='$Fran_Name' and Bmc_Code='$bmc[0]' and Tran_Date='$Tran_Date' and NOT(D_Flag='D')";
	if (mysqli_query($db, $sql)) {
    echo "Successfully modified";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db)."";
}
}

if(isset($_POST['date1']) && isset($_POST['fran1']) && isset($_POST['bmc1']) &&  isset($_POST['quantity1']) && isset($_POST['fat1']) && isset($_POST['snf1']) && isset($_POST['amount1']) && isset($_POST['ramount1']))
{
	$Qty=$_POST['quantity1'];
	$Fat=$_POST['fat1'];
	$SNF=$_POST['snf1'];
	$Amount=$_POST['amount1'];
	$Recovery_Amt=$_POST['ramount1'];
	$Tran_Date=$_POST['date1'];
	$date=date("Y-m-d");
	$Mody_User=$_SESSION['login_user'];
	$bmc=explode("-",$_POST['bmc1']);
	$Fran_Name=$_POST['fran1'];
	$sql="UPDATE ftd_cost_solid SET Qty='$Qty', Fat='$Fat' , Snf='$SNF', Amount='$Amount' , Recovery_Amt='$Recovery_Amt' , Mody_Date='$date' , Mody_User='$Mody_User',D_Flag='M' WHERE Fran_Name='$Fran_Name' and Bmc_Code='$bmc[0]' and Tran_Date='$Tran_Date'and NOT(D_Flag='D')";

    if(mysqli_query($db,$sql))
	{
    echo "Successfully modified";
	}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db)."";
}
}

if(isset($_POST['date2']) && isset($_POST['fran2']) && isset($_POST['bmc2']) &&  isset($_POST['quantity2']) && isset($_POST['fat2']) && isset($_POST['snf2']) && isset($_POST['amount2']))
{
	$Qty=$_POST['quantity2'];
	$Fat=$_POST['fat2'];
	$SNF=$_POST['snf2'];
	$Amount=$_POST['amount2'];
	$Tran_Date=$_POST['date2'];
	$date=date("Y-m-d");
	$Mody_User=$_SESSION['login_user'];
	$bmc=explode("-",$_POST['bmc2']);
	$Fran_Name=$_POST['fran2'];
	$sql="UPDATE ftd_smpl_milk SET Qty='$Qty', Fat='$Fat' , Snf='$SNF', Amount='$Amount' , Mody_Date='$date' , Mody_User='$Mody_User',D_Flag='M' WHERE Fran_Name='$Fran_Name' and Bmc_Code='$bmc[0]' and Tran_Date='$Tran_Date'and NOT(D_Flag='D')";

    if(mysqli_query($db,$sql))
	{
    echo "Successfully modified";
	}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db)."";
}
}

if(isset($_POST['date3']) && isset($_POST['fran3']) && isset($_POST['bmc3']) &&  isset($_POST['quantity3']) && isset($_POST['fat3']) && isset($_POST['snf3']) && isset($_POST['amount3']))
{
	$Qty=$_POST['quantity3'];
	$Fat=$_POST['fat3'];
	$SNF=$_POST['snf3'];
	$Amount=$_POST['amount3'];
	$Tran_Date=$_POST['date3'];
	$date=date("Y-m-d");
	$Mody_User=$_SESSION['login_user'];
	$bmc=explode("-",$_POST['bmc3']);
	$Fran_Name=$_POST['fran3'];
	$sql="UPDATE ftd_local_sales SET Qty='$Qty', Fat='$Fat' , Snf='$SNF', Amount='$Amount' , Mody_Date='$date' , Mody_User='$Mody_User',D_Flag='M' WHERE Fran_Name='$Fran_Name' and Bmc_Code='$bmc[0]' and Tran_Date='$Tran_Date' and NOT(D_Flag='D')";

    if(mysqli_query($db,$sql))
	{
    echo "Successfully modified";
	}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db)."";
}
}
?>