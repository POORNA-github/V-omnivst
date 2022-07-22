<?php
@include 'config.php';
$con = OpenCon();
$vehicleno = $_POST['vehicleno'];
$chassino = $_POST['chassino'];
$engineno = $_POST['engineno'];
$serialno = $_POST['serialno'];
$vehiclemake = $_POST['vehiclemake'];
$vehicletype = $_POST['vehicletype'];
$submodel = $_POST['submodel'];
$rpurpose = $_POST['rpurpose'];
$wsize = $_POST['wsize'];
$seats = $_POST['seats'];
$capacity = $_POST['capacity'];
$status = $_POST['status'];
$colour = $_POST['colour'];
$bodytype = $_POST['bodytype'];
$fuel = $_POST['fuel'];
$country = $_POST['country'];
$owners = $_POST['owners'];
$owner = $_POST['owner'];
$idc = $_POST['idc'];
$tel = $_POST['tel'];
$manufacdate = $_POST['manufacdate'];
$registerdate = $_POST['registerdate'];

$sql= "INSERT INTO `vehicle` (`id`,`vehicleno`,`chassino`,`engineno`,`serialno`,`vehiclemake`,`vehicletype`,`submodel`,`rpurpose`,`wsize`,`seats`,`capacity`,`status`,`colour`,`bodytype`,`fuel`,`country`,`owners`,`owner`,`idc`,`tel`,`manufacdate`,`registerdate`) VALUES('0','$vehicleno','$chassino','$engineno','$serialno','$vehiclemake','$vehicletype','$submodel','$rpurpose','$wsize','$seats','$capacity','$status','$colour','$bodytype','$fuel','$country','$owners','$owner','$idc','$tel','$manufacdate','$registerdate')";
$rs=mysqli_query($con,$sql);
if($rs)
{
    header("location:successfulregistration.php");
}
else
{
    header("location:unsuccessregistration.php");;
}
?>
