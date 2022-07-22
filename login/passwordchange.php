<?php

$conn = mysqli_connect("localhost","root","","user_db");
$result = mysqli_query($conn,"SELECT * FROM user_form WHERE id='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
if (count($_POST) > 0) {
  $r = mysqli_query($conn,"SELECT * FROM user_form WHERE id='" . $_GET['userid'] . "'");
  $rw= mysqli_fetch_array($r);
    if (md5($_POST["cpassword"]) == $rw["password"]) {
      mysqli_query($conn,"UPDATE user_form set  email='" . $_POST['email'] . "', password='" . md5($_POST['npassword']) . "' WHERE id='" . $_POST['id'] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="php_change_password/styles.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">



<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

cpassword = document.frmChange.cpassword;
npassword = document.frmChange.npassword;
rpassword = document.frmChange.rpassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("cpassword").innerHTML = "required";
	output = false;
}
else if(!npassword.value) {
	newPassword.focus();
	document.getElementById("npassword").innerHTML = "required";
	output = false;
}
else if(!rpassword.value) {
	confirmPassword.focus();
	document.getElementById("rpassword").innerHTML = "required";
	output = false;
}
if(npassword.value != rpassword.value) {
	npassword.value="";
	rpassword.value="";
	npassword.focus();
	document.getElementById("rpassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>
<body>
<h3> Update Password</h3>
</div>

<form  style="margin: auto; width: 220px;" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post" onSubmit="return validatePassword()">


<div class="row g-2">
 
                        <div class="col-auto">
                          <div class="form-floating">
                                <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" value="<?= $row['email']; ?>">
                                    <label for="email">E-Mail</label>
                                  </div>
                          </div>
                        <div class="col-auto">
                          <div class="form-floating">
                                <div class="form-floating">
                                    <input type="password" class="form-control"  name="cpassword" id="cpassword">
                                    <label for="cpassword">Password</label>
                                  </div>
                          </div>
                          <div class="col-auto">
                                <div class="form-floating">
                                    <input type="password" class="form-control"  name="npassword" id="npassword">
                                    <label for="npassword">New Password</label>
                                  </div>
                          </div>
                          <div class="col-auto">
                                <div class="form-floating">
                                    <input type="password" class="form-control"  name="rpassword" id="rpassword">
                                    <label for="password">Re-type New Password</label>
                                  </div>
                          </div>
                        

<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">
<a href="login_form.php" class="btn btn-default">Cancel</a>
                        
</form>
</div>
</div>        
</div>
</div>
</body>
</html>