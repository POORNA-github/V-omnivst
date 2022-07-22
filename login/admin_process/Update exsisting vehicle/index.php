<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Exsisting Vehicle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../style.css" rel="stylesheet">
</head>
<body>
  <?php
  include ('../admindashpanel.php');
  ?>
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="vehicleno" placeholder="Enter Vehicle Number To Process" value="<?php if(isset($_GET['vehicleno'])){echo $_GET['vehicleno'];} ?>" class="form-control">
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
                                    @include('config.php');
                                    $con = OpenCon();

                                    if(isset($_GET['vehicleno']))
                                    {
                                        $vehicleno = $_GET['vehicleno'];

                                        $query = "SELECT * FROM vehicle WHERE vehicleno='$vehicleno' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                            
                                            <table class='table table-bordered table-striped'>
                     <tr>
                        <td>Vehicle Number</td>
                        <td>Engine No</td>
                        <td>Chassi No</td>
                        <td>ID</td>
                        <td>Owner</td>
                        <td>Action</td>

                     </tr>
                     <tr>
                        <td><?php echo $row["vehicleno"]; ?></td>
                        <td><?php echo $row["engineno"]; ?></td>
                        <td><?php echo $row["chassino"]; ?></td>
                        <td><?php echo $row["idc"]; ?></td>
                        <td><?php echo $row["owner"]; ?></td>
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
