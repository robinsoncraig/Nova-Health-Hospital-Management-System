<?php
include("adheader.php");
include("dbconnection.php");

if (isset($_GET['delid'])) {
    $delId = $_GET['delid'];
    $deletePrescription = "DELETE FROM prescription WHERE prescriptionid='$delId'";
    
    if (mysqli_query($con, $deletePrescription)) {
        echo "<script>alert('Prescription deleted successfully..');</script>";
    } else {
        echo "<script>alert('Error deleting prescription.');</script>";
    }
}

$sql = "SELECT * FROM prescription WHERE patientid='$_SESSION[patientid]'";
$result = mysqli_query($con, $sql);
?>

<div class="container-fluid">
    <div class="block-header">
        <h2 class="text-center">View Prescription Record</h2>
    </div>

    <?php while ($prescription = mysqli_fetch_array($result)) : ?>
        <?php
        $patientQuery = "SELECT * FROM patient WHERE patientid='$prescription[patientid]'";
        $doctorQuery = "SELECT * FROM doctor WHERE doctorid='$prescription[doctorid]'";
        
        $patientResult = mysqli_query($con, $patientQuery);
        $doctorResult = mysqli_query($con, $doctorQuery);
        
        $patient = mysqli_fetch_array($patientResult);
        $doctor = mysqli_fetch_array($doctorResult);
        ?>

        <div class="card" style="padding: 10px">
            <section class="container">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <td><strong>Doctor</strong></td>
                            <td><strong>Patient</strong></td>
                            <td><strong>Prescription Date</strong></td>
                            <td><strong>Status</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $doctor['doctorname'] ?></td>
                            <td><?= $patient['patientname'] ?></td>
                            <td><?= $prescription['prescriptiondate'] ?></td>
                            <td><?= $prescription['status'] ?></td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>Medicine</td>
                            <td>Cost</td>
                            <td>Unit</td>
                            <td>Dosage</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $prescriptionRecordsQuery = "SELECT * FROM prescription_records 
                            LEFT JOIN medicine ON prescription_records.medicine_name = medicine.medicineid 
                            WHERE prescription_records.prescription_id='$prescription[0]'";
                        
                        $prescriptionRecordsResult = mysqli_query($con, $prescriptionRecordsQuery);
                        
                        while ($prescriptionRecord = mysqli_fetch_array($prescriptionRecordsResult)) {
                            echo "<tr>
                                    <td>{$prescriptionRecord['medicinename']}</td>
                                    <td>{$prescriptionRecord['cost']}</td>
                                    <td>{$prescriptionRecord['unit']}</td>
                                    <td>{$prescriptionRecord['dosage']}</td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    <?php endwhile; ?>

    <input type="submit" class="btn btn-lg btn-primary" name="print" id="print" value="Print" onclick="myFunction()" />
    <p>&nbsp;</p>
</div>

<?php
include("adfooter.php");
?>

<script>
    function myFunction() {
        window.print();
    }
</script>
