<?php

if(isset($_POST['delete']))
{
	$bmc=explode("-",$_POST['bmc']);
		//$del="update ".$table." set D_Flag='D' where Tran_Date='".$_POST['date']."'";
	//$del="update ".$table." set D_Flag='D' where Tran_Date='".$_POST['date']."' and Fran_Name='".$_POST['Franchise']."' and Bmc_Code='".$bmc[0]."'";
    $del="delete from ".$table." where Tran_Date='".$_POST['date']."' and Fran_Name='".$_POST['Franchise']."' and Bmc_Code='".$bmc[0]."'";
	if(mysqli_query($db,$del) )
	{
    echo "<script type='text/javascript'>
                alert('Successfully deleted');
            </script>";
	

    }

else {
    echo "Error: " . $del . "<br>" . mysqli_error($db);
	
}
    //$del1="delete from ".$table."where Tran_Date='".$_POST['date']."' and Fran_Name='".$_POST['Franchise']."' and Bmc_Code='".$bmc[0]."'"
    //if(mysqli_query($db,$del1))
}	



?>
