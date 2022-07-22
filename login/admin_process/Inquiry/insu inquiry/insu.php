<?php
include('../../admindashpanel.php');
?>
     <link rel="stylesheet" href="../../../style.css">
    <div class="half">
	<div id="nom">
	<p class="veh_det"><u>Inquire Eco Reports</u></p>
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
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter Vehicle Number To Search">
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
                                    <th>Vehicle No</th>
                                    <th>Valid Till</th>
                                    <th>Issue Date</th>
                                    <th>System Number</th>
                                    <th>Center</th>
                                    <th>Comments</th>
                                    <th>Type</th>
                                    <th>Test Fee</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   @include('config.php');
                                   $conn = OpenCon();
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM insuarance WHERE CONCAT(vehicleno) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['vehicleno']; ?></td>
                                                    <td><?= $items['validtill']; ?></td>
                                                    <td><?= $items['testfee']; ?></td>
                                                    <td><?= $items['syn']; ?></td>
                                                    <td><?= $items['center']; ?></td>
                                                    <td><?= $items['comments']; ?></td>
                                                    <td><?= $items['type']; ?></td>
                                                    <td><?= $items['issue']; ?></td>
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
                                                   There is a no insuarance report to this vehicle number!
                                                </div>
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                <br>
                                               
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
                            <a href="admin_page.php" button class="btn btn-primary" type="button">Home</a></button>
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
