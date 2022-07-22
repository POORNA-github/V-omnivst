<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Police Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>
            <span class="logo_name">Police</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Police</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
            <li class="mode">
            <a href="../Front/news.php">
                        <i class="uil uil-bag"></i>
                    <span class="link-name">News</span>
                </a></li>
            <li class="mode">
                    <a href="password.php">
                        <i class="uil uil-book"></i>
                    <span class="link-name"> Password</span>
                </a>
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
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-clipboard"></i>
                        <a href="police process/inquire_eco.php" span class="text">View Eco Report</a></span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-clipboard-alt"></i>
                        <a href="police process/inquire_insu.php" span class="text">View Lisence Of a Vehicle</a></span>
                        <span class="number"></span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-envelope-star"></i>
                        <a href="contact/contact.html" span class="text">Contact Admin</a></span>
                        <span class="number"></span>
                    </div>
                </div>
            </div>


    </section>

    <script src="script.js"></script>
</body>
</html>