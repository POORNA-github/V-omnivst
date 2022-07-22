<?php
include('../../admindashpanel.php');
?>
     <link rel="stylesheet" href="../../../style.css">
	<div id="nom">
	<p class="veh_det"><u>Check Vehicle Details From Chassi Number</u></p>
    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <div class="card mt-4">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter Vehicle Chassi Number To Search">
                                        <button type="submit" class="btn btn-outline-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Parameter</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    @include('../Vehiclenumber_inquiry/config.php');
                                    $con = OpenCon();

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM vehicle WHERE CONCAT(chassino) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <th scope="row">VEHICLE NUMBER</th>
                                                    <td><?= $items['vehicleno']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">SERIAL NUMBER</th>
                                                    <td><?= $items['serialno']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ENGINE NUMBER</th>
                                                    <td><?= $items['engineno']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">CHASSI NUMBER</th>
                                                    <td><?= $items['chassino']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">VEHICLE MAKE</th>
                                                    <td><?= $items['vehiclemake']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">VEHICLE TYPE</th>
                                                    <td><?= $items['vehicletype']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">SUB MODEL</th>
                                                    <td><?= $items['submodel']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">REGISTRATION PURPOSE/TYPE</th>
                                                    <td><?= $items['rpurpose']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">WHEEL SIZE</th>
                                                    <td><?= $items['wsize']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">NUMBER OF seats</th>
                                                    <td><?= $items['seats']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ENGINE CAPACITY(CC)</th>
                                                    <td><?= $items['capacity']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">STATUS WHEN REGISTER</th>
                                                    <td><?= $items['status']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">COLOUR</th>
                                                    <td><?= $items['colour']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">BODY TYPE</th>
                                                    <td><?= $items['bodytype']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">FUEL</th>
                                                    <td><?= $items['fuel']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ORIGIN COUNTRY</th>
                                                    <td><?= $items['country']; ?></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">TOTAL PREVIOUS OWNERS</th>
                                                    <td><?= $items['owners']; ?></td>
                                                </tr>

                                                <tr>
                                                    <th scope="row">OWNER</th>
                                                    <td><?= $items['owner']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">ID NUMBER</th>
                                                    <td><?= $items['idc']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">TEL</th>
                                                    <td><?= $items['tel']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">MANUFAC DATE</th>
                                                    <td><?= $items['manufacdate']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">REGISTER DATE</th>
                                                    <td><?= $items['registerdate']; ?></td>
                                                </tr>


                                                <div class="alert alert-info" role="alert">
                                                   Vehicle Info!
                                                </div>
                                                

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
                                                     Chassi Number Mismatch With The System!
                                                </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
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