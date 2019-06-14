<?php
include('config.php');
$output="";
if(isset($_POST['date'])&&isset($_POST['fran']) && isset($_POST['bmc']))
{
$bmc=explode("-",$_POST['bmc']);

$select="select * from ftd_solid_recvd_plant where NOT(D_Flag='D') and Tran_Date='".$_POST['date']."' and Fran_Name='".$_POST['fran']."' and Bmc_Code='".$bmc[0]."'";
$result=mysqli_query($db,$select);
$output="";
$output.='<div class="table-responsive"><table class="table table-bordered">
<tr>
<th>Date</th>
<th>Franchise</th>
<th>Tanker No</th>
<th>BMC Code</th>
<th>BMC Name</th>
<th>Quantity</th>
<th>Fat</th>
<th>SNF</th>
</tr>';
while($row=mysqli_fetch_assoc($result))
{
	$output.='<tr>
	<td>'.$row['Tran_Date'].'</td>
	<td>'.$row['Fran_Name'].'</td>
	<td>'.$row['Tanker_No'].'</td>
	<td>'.$row['Bmc_Code'].'</td>
	<td>'.$row['Bmc_Name'].'</td>
	<td>'.$row['Qty'].'</td>
	<td>'.$row['Fat'].'</td>
	<td>'.$row['Snf'].'</td>
	</tr>';
}
$output.="</table></div>";
echo $output;

}

if(isset($_POST['date1'])&&isset($_POST['fran1']) && isset($_POST['bmc1']))
{
$bmc=explode("-",$_POST['bmc1']);

$select="select * from ftd_cost_solid where NOT(D_Flag='D') and Tran_Date='".$_POST['date1']."' and Fran_Name='".$_POST['fran1']."' and Bmc_Code='".$bmc[0]."'";
$result=mysqli_query($db,$select);
$output="";
$output.='<div class="table-responsive"><table class="table table-bordered">
<tr>
<th>Date</th>
<th>Franchise</th>
<th>BMC Code</th>
<th>BMC Name</th>
<th>Quantity</th>
<th>Fat</th>
<th>SNF</th>
<th>Amount</th>
<th>Recovery Amount</th>
</tr>';
while($row=mysqli_fetch_assoc($result))
{
	$output.='<tr>
	<td>'.$row['Tran_Date'].'</td>
	<td>'.$row['Fran_Name'].'</td>
	<td>'.$row['Bmc_Code'].'</td>
	<td>'.$row['Bmc_Name'].'</td>
	<td>'.$row['Qty'].'</td>
	<td>'.$row['Fat'].'</td>
	<td>'.$row['Snf'].'</td>
	<td>'.$row['Amount'].'</td>
	<td>'.$row['Recovery_Amt'].'</td>
	</tr>';
}
$output.="</table></div>";
echo $output;

}

if(isset($_POST['date2'])&&isset($_POST['fran2']) && isset($_POST['bmc2']))
{
$bmc=explode("-",$_POST['bmc2']);

$select="select * from ftd_smpl_milk where NOT(D_Flag='D') and Tran_Date='".$_POST['date2']."' and Fran_Name='".$_POST['fran2']."' and Bmc_Code='".$bmc[0]."'";
$result=mysqli_query($db,$select);
$output="";
$output.='<div class="table-responsive"><table class="table table-bordered">
<tr>
<th>Date</th>
<th>Franchise</th>
<th>BMC Code</th>
<th>BMC Name</th>
<th>Quantity</th>
<th>Fat</th>
<th>SNF</th>
<th>Amount</th>
</tr>';
while($row=mysqli_fetch_assoc($result))
{
	$output.='<tr>
	<td>'.$row['Tran_Date'].'</td>
	<td>'.$row['Fran_Name'].'</td>
	<td>'.$row['Bmc_Code'].'</td>
	<td>'.$row['Bmc_Name'].'</td>
	<td>'.$row['Qty'].'</td>
	<td>'.$row['Fat'].'</td>
	<td>'.$row['Snf'].'</td>
	<td>'.$row['Amount'].'</td>
	</tr>';
}
$output.="</table></div>";
echo $output;

}

if(isset($_POST['date3'])&&isset($_POST['fran3']) && isset($_POST['bmc3']))
{
$bmc=explode("-",$_POST['bmc3']);

$select="select * from ftd_local_sales where NOT(D_Flag='-') and Tran_Date='".$_POST['date3']."' and Fran_Name='".$_POST['fran3']."' and Bmc_Code='".$bmc[0]."'";
$result=mysqli_query($db,$select);
$output="";
$output.='<div class="table-responsive"><table class="table table-bordered">
<tr>
<th>Date</th>
<th>Franchise</th>
<th>BMC Code</th>
<th>BMC Name</th>
<th>Quantity</th>
<th>Fat</th>
<th>SNF</th>
<th>Amount</th>
</tr>';
while($row=mysqli_fetch_assoc($result))
{
	$output.='<tr>
	<td>'.$row['Tran_Date'].'</td>
	<td>'.$row['Fran_Name'].'</td>
	<td>'.$row['Bmc_Code'].'</td>
	<td>'.$row['Bmc_Name'].'</td>
	<td>'.$row['Qty'].'</td>
	<td>'.$row['Fat'].'</td>
	<td>'.$row['Snf'].'</td>
	<td>'.$row['Amount'].'</td>
	</tr>';
}
$output.="</table></div>";
echo $output;

}
?>