<?php
include('../admindashpanel.php');
@include('config.php');
$conn=OpenCon();
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE vehicle set  vehicleno='" . $_POST['vehicleno'] . "', chassino='" . $_POST['chassino'] . "' ,engineno='" . $_POST['engineno'] . "' , owners='" . $_POST['owners'] . "', colour='" . $_POST['colour'] . "' , owner='" . $_POST['owner'] . "' , idc='" . $_POST['idc'] . "' , tel='" . $_POST['tel'] . "'  WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM vehicle WHERE id='" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>update query in MySQL  - phpcodingstuff.com</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../../style.css" rel="stylesheet">
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
                            <input type="text" class="form-control" name="vehicleno" id="vehicleno" value="<?= $row['vehicleno']; ?>">
                            <label for="floatingInputGrid">VEHICLE NO</label>
                          </div>
                        </div>
                        <div class="col-md">
                          <div class="form-floating">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name="chassino" id="chassino" value="<?= $row['chassino']; ?>">
                                    <label for="chassino">CHASSI NUMBER</label>
                                  </div>
                          </div>
                        
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="engineno" id="engineno" value="<?= $row['engineno']; ?>">
                            <label for="engineno">ENGINE NUMBER</label>
                          </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                            <input type="text" class="form-control" name="owners" id="owners" value="<?= $row['owners']; ?>">
                              <label for="owners">TOTAL NUMBER OF OWNERS</label>
                            </div>
                          </div>
                        </div>   
                      <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                            <input type="text" class="form-control" name="colour" id="colour" value="<?= $row['colour']; ?>">
                              <label for="colour">COLOUR</label>
                            </div>
                          </div>
                        
                          <div class="col-md">
                            <div class="form-floating">
                              <div class="form-floating">
                                  <input type="text" class="form-control" name="owner" id="owner" value="<?= $row['owner']; ?>">
                                  <label for="owner">REGISTERING OWNER</label>
                                </div>
                            </div>
                          </div>
                      </div>            
                        <div class="row g-2">
                          <div class="col-md">
                            <div class="form-floating">
                              <input type="text" class="form-control" name="idc" id="idc" value="<?= $row['idc']; ?>">
                              <label for="idc">ID NUMBER</label>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-floating">
                                  <div class="form-floating">
                                      <input type="phone" class="form-control" name="tel" id="tel" value="<?= $row['tel']; ?>">
                                      <label for="tel">TELEPHONE NUMBER</label>
                                    </div>
                            </div>
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