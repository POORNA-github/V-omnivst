<?php
include('../../admindashpanel.php');
?>
     <link rel="stylesheet" href="../../../style.css">
                <div class="half">
	<div id="nom">
	<p class="veh_det"><u>Inquire By NIC number</u></p>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter Identity Number To Search">
                                        <button type="submit" class="btn btn-outline-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Vehicle No</th>
                                    <th>Vehicle Type</th>
                                    <th>Vehicle Make</th>
                                    <th>Tel</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    @include('../Vehiclenumber_inquiry/config.php');
                                    $con = OpenCon();

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM vehicle WHERE CONCAT(idc) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
                                        if(mysqli_num_rows($query_run) > 0)
                                        
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                
                                                <tr>
                                                    <td><?= $items['owner']; ?></td>
                                                    <td><?= $items['vehicleno']; ?></td>
                                                    <td><?= $items['vehicletype']; ?></td>
                                                    <td><?= $items['vehiclemake']; ?></td>
                                                    <td><?= $items['tel']; ?></td>
                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                                <div class="alert alert-danger" role="alert">
                                                   There is a no user for this NIC number!
                                                </div>
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                <br>
                                                <a href="register.html"  button class="btn btn-outline-primary" type="button" >Continue Registration</button></a><br>
                                                </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-block">
                            <a href="../../../admin_page.php" button class="btn btn-primary" type="button">Home</a></button>
                            <button class="btn btn-primary" type="button">Print</button>
                        </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	</div>
	
	</form>
	</div>
            </div>
        </div>
    </section>

    <script src="../../../script.js"></script>
</body>
</html>