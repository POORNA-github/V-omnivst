<?php
@include 'configar.php';
$con = OpenCon();
$vehicleno = $_POST['vehicleno'];
$validdate = $_POST['validdate'];
$center = $_POST['center'];
$testfee = $_POST['testfee'];
$sysno = $_POST['sysno'];
$odo = $_POST['odo'];
$ovstatus = $_POST['ovstatus'];
$doi = $_POST['doi'];

$sql = "INSERT INTO `eco_reports`(`id`, `vehicleno`, `validdate`, `center`, `testfee`, `sysno`, `odo`, `ovstatus`, `doi`)values('0', '$vehicleno', '$validdate', '$center', '$testfee', '$sysno', '$odo', '$ovstatus', '$doi')";

$ra=mysqli_query($con, $sql);
if($ra){
	header("location:successfulregistration.php");
}

else{
	header("location:unsuccessregistration.php");
}

?>