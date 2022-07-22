<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">Admin</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin_page.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
           
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard - Inquiry</span>
                </div>
                <div class="half">
	<div id="nom">
	<p class="veh_det"><u>Check Vehicle Details From Engine Number</u></p>
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
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter Engine Number To Search">
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
                                    $con = mysqli_connect("localhost","root","","user_db");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM register_form WHERE CONCAT(engineno) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <th scope="row">Vehicle Number</th>
                                                    <td><?= $items['vehicleno']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Serial Number</th>
                                                    <td><?= $items['serialno']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Engine Number</th>
                                                    <td><?= $items['engineno']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chassi Number</th>
                                                    <td><?= $items['chassino']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Vehicle Class</th>
                                                    <td><?= $items['vehicleClass']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Make</th>
                                                    <td><?= $items['vehiclecompany']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Manufature Date</th>
                                                    <td><?= $items['manufacdate']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Register Date</th>
                                                    <td><?= $items['registerdate']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Fuel Type</th>
                                                    <td><?= $items['fuel']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Total Owners</th>
                                                    <td><?= $items['totalowners']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Owner Id Numbber</th>
                                                    <td><?= $items['ownerid']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Owner</th>
                                                    <td><?= $items['owner']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address</th>
                                                    <td><?= $items['address']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email</th>
                                                    <td><?= $items['email']; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Chassi Number</th>
                                                    <td><?= $items['tel']; ?></td>
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
                                                     Engine Number Mismatch!
                                                </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
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

    <script src="script.js"></script>
</body>
</html>