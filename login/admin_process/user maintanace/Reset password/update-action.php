<?php
include('../../admindashpanel.php');
$conn = mysqli_connect("localhost","root","","user_db");
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user_form set  email='" . $_POST['email'] . "', password='" . md5($_POST['password']) . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user_form WHERE id='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>update query in MySQL  - phpcodingstuff.com</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../../style.css" rel="stylesheet">
<style type="text/css">
.wrapper{
width: 500px;
margin: 0 auto;
}
</style>
</head>
<body>

<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>
<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div class="row g-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="email" class="form-control" name="email" id="email" value="<?= $row['email']; ?>">
                            <label for="floatingInputGrid">E-Mail</label>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-floating">
                                <div class="form-floating">
                                    <input type="password" class="form-control"  name="password" id="password" value="<?= $row['password']; ?>">
                                    <label for="password">Password</label>
                                  </div>
                          </div>
                        
<input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">
<a href="users.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>