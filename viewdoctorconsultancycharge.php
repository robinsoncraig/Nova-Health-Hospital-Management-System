<?php

include("adformheader.php");
include("dbconnection.php");

// Define $taxamt and $rsbilling_records
$taxamt = 0; // Assuming tax amount is initially zero
$rsbilling_records = 0; // Assuming initial value for $rsbilling_records

if(isset($_GET['delid']))
{
	$sql ="DELETE FROM treatment_records WHERE appointmentid='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('appointment record deleted successfully..');</script>";
	}
}
?>
<div class="container-fluid">
	<div class="block-header">
		<h2 class="text-center">View Doctor consultancy charges</h2>

	</div>

<div class="card">

	<section class="container">
		<table class="table table-bordered table-striped table-hover js-exportable dataTable" >
			<thead>
				<tr>
					<th width="97" scope="col">Date</th>
					<th width="245" scope="col">Description</th>
					<th width="86" scope="col">Bill Amount</th>
				</tr>
			</thead>
			<tbody>
    <?php
    $sql = "SELECT * FROM billing_records where bill_type='Consultancy Charge' AND bill_type_id='$_SESSION[doctorid]'";
    $qsql = mysqli_query($con, $sql);
    $billamt = 0;

    while ($rs = mysqli_fetch_array($qsql)) {
        echo "<tr>
            <td>$rs[bill_date]</td>
            <td> $rs[bill_type]";

        if ($rs['bill_type'] == "Service Charge") {
            $sqlservice_type1 = "SELECT * FROM service_type WHERE service_type_id='$rs[bill_type_id]'";
            $qsqlservice_type1 = mysqli_query($con, $sqlservice_type1);
            $rsservice_type1 = mysqli_fetch_array($qsqlservice_type1);

            if ($rsservice_type1) {
                echo " - " . $rsservice_type1['service_type'];
            }
        }

        // Remaining code...

        echo " </td><td>KES $rs[bill_amount]</td></tr>";
        $billamt = $billamt + $rs['bill_amount'];
    }
    ?>
</tbody>

			<tfoot>
				<tr>
					<td></td>
					<td>Total Earnings :</td>

					<td>KES <?php echo ($billamt + $taxamt) - $rsbilling_records; ?></td>

					
				</tr>
			</tfoot>
		</table>

		
	</section>
</div>
</div>


<?php
include("adformfooter.php");
?>
