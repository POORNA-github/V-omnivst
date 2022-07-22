<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Exsisting Vehicle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../style.css" rel="stylesheet">
</head>
<body>
  <?php
  include ('../../admindashpanel.php');
  ?>
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="email" placeholder="Enter User Email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    @include '../config.php';
                                    $con = OpenCon();

                        
                                        if(isset($_GET['email']))
                                    {
                                        $id = $_GET['email'];

                                        $query = "SELECT * FROM user_form WHERE email='$id' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                
                                            
                                            <table class='table table-bordered table-striped'>
                     <tr>
                        <td>Name</td>
                        <td>User Type</td>
                        <td>Email</td>

                     </tr>
                     <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["user_type"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><a href="update-action.php?userid=<?php echo $row["id"]; ?>">Update</a></td>
                        
                        <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  
    </body>
</html>
