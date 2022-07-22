<?
@include 'config.php';

session_start();
if($status == '0'){
    // Redirect to first password change page
    header("location: /login/firstpassword.php");
    } elseif (isset($_SESSION['user_name'])){
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

    <title>Eco User Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">Eco</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">eco_Dahsboard</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
            <li class="mode">
                    
                <li class="mode">
                    <a href="password.php">
                        <i class="uil uil-book"></i>
                    <span class="link-name">Change Password</span>
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
                        <a href="ecotest_process/checkvehicleeco.php" span class="text">Update the Eco Test</a></span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-chat"></i>
                        <a href="contact/contact.html" span class="text">Contact Admin</a></span>
                        <span class="number"></span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-align-alt"></i>
                        <a href="../Front/news.php" span class="text">News</a></span>
                        <span class="number"></span>
                    </div>
                </div>
            </div>


           

            </div>
        </div>
    </section>-->

    <script src="script.js"></script>
</body>
</html>