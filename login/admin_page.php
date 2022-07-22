<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

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
                    <span class="link-name">Dahsboard</span>
                </a></li>
           
            </ul>
            
            <ul class="logout-mode">
            <li class="mode">
                    <a href="password.php">
                        <i class="uil uil-book"></i>
                    <span class="link-name">Password</span>
                </a></li>
            
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
            
            <img src="images/profile.jpg">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-clipboard"></i>
                        <a href="admin_process/vehicleregister/checkvehicleadmin.php" span class="text">Register A Vehicle</span></a>
                    </div>
                    <div class="box box2">
                        
                        <i class="uil uil-clipboard-alt"></i>
                        <a href="admin_process/Update exsisting vehicle/index.php"span class="text">Update Exsisting Vehicle</a></span>
                        <span class="number"></span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-envelope-star"></i>
                        <a href="admin_process/messages/messages.php" span class="text">Inbox</a></span>
                        <span class="number"></span>
                    </div>
                </div>
            </div>
            <div class="dash-content">
                <div class="overview">
    
                    <div class="boxes">
                        <div class="box box4">
                            
                            <i class="uil uil-user"></i>
                            <a href="admin_process/user maintanace/usermaintain.php" span class="text">User Maintainance</a></span>
                        </div>
                        <div class="box box5">
                            <i class="uil uil-chart-line"></i>
                            <a href="admin_process/Inquiry/inquiryadmin.php" span class="text">Inquiry Reports</a></span>
                            <span class="number"></span>
                        </div>
                        <div class="box box6">
                            <i class="uil uil-comment-alt-dots"></i>
                            <a href="http://localhost/login/admin_process/news/news.php" span class="text">News</a></span>
                            <span class="number"></span>
                        </div>
                    </div>
                </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Messeges</span>
                </div>
                <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    @include ('admin_process/messages/config.php');
                                    $con = OpenCon();
                                        $query = "SELECT * FROM contact ORDER BY id DESC LIMIT 2";
                                        $query_run = mysqli_query($con, $query);
                                        if(mysqli_num_rows($query_run) > 0)
                                        
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                
                                                <tr>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['subject']; ?></td>
                                                    <td><?= $items['comments']; ?></td>
                                                
                                                    
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Messeges</td>
                                                </tr>
                                                
                                                
                                            <?php
                                        }
                                    CloseCon($con);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                

            </div>
            <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>
                <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ACtivity</th>
                                    <th>Date</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                        @include ('db.php');
                                        $query = "SELECT * FROM vehicle ORDER BY id DESC LIMIT 2";
                                        $query_run = mysqli_query($conn, $query);
                                        if(mysqli_num_rows($query_run) > 0)
                                        
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                
                                                <tr>
                                                    <td>Vehicle No:<?=$items['vehicleno']; ?> registered in the system<td>          
                                                    <?=$items['registerdate']; ?>          
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Messeges</td>
                                                </tr>
                                                
                                                
                                            <?php
                                        }
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>