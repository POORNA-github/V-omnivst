<?php
@include ('conn.php');
$con = OpenCon();

$vehicleno = $_POST['vehicleno'];
$validtill = $_POST['validtill'];
$center = $_POST['center'];
$testfee = $_POST['testfee'];
$syn = $_POST['syn'];
$comments = $_POST['comments'];
$type = $_POST['type'];
$issue = $_POST['issue'];

$sql = "INSERT INTO `insuarance`(`id`, `vehicleno`, `validtill`, `center`, `testfee`, `syn`, `comments`, `type`, `issue`)values('0', '$vehicleno', '$validtill', '$center', '$testfee', '$syn', '$comments', '$type', '$issue')";

$r=mysqli_query($conn, $sql);
if($r){
	header("location:registrationsuccessfull.php");
}

else{
	header("location:unsuccess.php");
}

?>