<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include('config.php');
?>
<head>
  <title>Sample Milk</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
 <script>
 $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
 
 </script>


<script type="text/javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable();
} );

</script>
    
</head>

<nav class="navbar navbar-default navbar-inverse">

        <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->

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
      <a class="btn nav-link" href="solidrecievedtable.php">Solid Recieved</a>
    </li>	
	<li  class="nav-item">
      <a class="btn nav-link" id="hide" href="costofsolidtable.php" >Cost of Solid</a>
    </li>
	<li class="active">
      <a class="btn nav-link"  id="hide1" href="samplemilktable.php">Sample Milk</a>
    </li>
	<li class="nav-item">
      <a class="btn nav-link"  id="hide2" href="procurement.php">Local Sales</a>
    </li>
	<li class="nav-item">
      <a class="btn nav-link" href="logout.php">Log Out</a>
    </li>

          
        </ul>
          
</div><!-- /.navbar-collapse -->
      
</div><!-- /.container -->
    </nav><!-- /.navbar -->
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Transaction date</th>
                <th>Franchise name</th>
                <th>BMC Code</th>
                <th>BMC Name</th>
                <th>Quantity</th>
                <th>Fat</th>
                <th>Snf</th>
                <th>Amount</th>
                <th>Date Created</th>
                <th>Created by</th>
                <th>Last Updated</th>
                <th>Last Updated by</th>
                
            </tr>
        </thead>
        <tbody>
		<?php
		 $select = "select * from ftd_smpl_milk";
		 $result = mysqli_query($db,$select);
		 while($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
			<td><?php echo $row['Tran_Date'];?></td>
			<td><?php echo $row['Fran_Name']?></td>
			<td><?php echo $row['Bmc_Code']?></td>
			<td><?php echo $row['Bmc_Name']?></td>
			<td><?php echo $row['Qty']?></td>
			<td><?php echo $row['Fat']?></td>
			<td><?php echo $row['Snf']?></td>
			<td><?php echo $row['Amount']?></td>
			<td><?php echo $row['Add_Date']?></td>
			<td><?php echo $row['Add_user']?></td>
			<td><?php echo $row['Mody_Date']?></td>
			<td><?php echo $row['Mody_User']?></td>
			</tr>
			

            <?php
            }
            ?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>Transaction date</th>
                <th>Franchise name</th>
                <th>BMC Code</th>
                <th>BMC Name</th>
                <th>Quantity</th>
                <th>Fat</th>
                <th>Snf</th>
                <th>Amount</th>
                <th>Date Created</th>
                <th>Created by</th>
                <th>Last Updated</th>
                <th>Last Updated by</th>
                
            </tr>
        </tfoot>
    </table>
	</div>
	</body>