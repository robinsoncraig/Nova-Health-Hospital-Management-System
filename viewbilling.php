<?php

include("dbconnection.php");
if(isset($_GET['delid']))
{
	$sql ="DELETE FROM billing_records WHERE billingid='$_GET[delid]'";
	$qsql=mysqli_query($con,$sql);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('billing record deleted successfully..');</script>";
	}
}
?>
 <section class="container">


<?php
$sqlbilling_records ="SELECT * FROM billing WHERE appointmentid='$billappointmentid'";
$qsqlbilling_records = mysqli_query($con,$sqlbilling_records);
$rsbilling_records = mysqli_fetch_array($qsqlbilling_records);
?>
 	<table class="table table-bordered table-striped">
    <tbody>
        <tr>
            <th scope="col"><div align="right">Bill number &nbsp; </div></th>
            <td><?php echo '#Swift_' . $rsbilling_records['billingid']; ?></td>
        </tr>
        <tr>
            <th width="124" scope="col"><div align="right">Appointment Number &nbsp; </div></th>
            <td width="413"><?php echo $rsbilling_records['appointmentid']; ?></td>
        </tr>
        <tr>
            <th scope="col"><div align="right">Billing Date &nbsp; </div></th>
            <td>&nbsp;<?php echo $rsbilling_records['billingdate']; ?></td>
        </tr>
        <tr>
            <th scope="col"><div align="right">Billing time&nbsp; </div></th>
            <td>&nbsp;<?php echo $rsbilling_records['billingtime']; ?></td>
        </tr>
    </tbody>
</table>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="97" scope="col">Date</th>
            <th width="245" scope="col">Description</th>
            <th width="86" scope="col">Bill Amount</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql ="SELECT * FROM billing_records where billingid='$rsbilling_records[billingid]'";
        $qsql = mysqli_query($con,$sql);
        $billamt= 0;
        while($rs = mysqli_fetch_array($qsql)) {
            echo "<tr>
                    <td>&nbsp;{$rs['bill_date']}</td>
                    <td>&nbsp; {$rs['bill_type']}";

            // ... (Your existing code for different bill types)

            echo "</td><td>&nbsp;KES {$rs['bill_amount']}</td></tr>";
            $billamt += $rs['bill_amount'];
        }
        ?>
    </tbody>
</table>

<table class="table table-bordered table-striped">
    <tbody>
        <tr>
            <th scope="col"><div align="right">Bill Amount &nbsp; </div></th>
            <td>&nbsp;KES <?php echo $billamt; ?></td>
        </tr>
        <tr>
            <th width="442" scope="col"><div align="right">Tax Amount (5%) &nbsp; </div></th>
            <td width="95">&nbsp;KES <?php echo $taxamt = 5 * ($billamt / 100); ?></td>
        </tr>
        <tr>
            <th scope="col"><div align="right">Discount &nbsp; </div></th>
            <td>&nbsp;KES <?php echo isset($rsbilling_records['discount']) ? $rsbilling_records['discount'] : 0; ?></td>
        </tr>
        <tr>
            <th scope="col"><div align="right">Grand Total &nbsp; </div></th>
            <td>&nbsp;KES <?php echo ($billamt + $taxamt) - (isset($rsbilling_records['discount']) ? $rsbilling_records['discount'] : 0); ?></td>
        </tr>
    </tbody>
</table>

  
    </section>