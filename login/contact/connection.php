<?php
	$con = mysqli_connect('localhost','root','','formc');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];
	
    $sql = "INSERT INTO `contact`(`id`,`name`, `email`, `subject`, `comments`)values('0', '$name', '$email', '$subject', '$comments')";
    $sa=mysqli_query($con, $sql);
    if($sa){
        header("location:success.html");
    }
    
    else{
        header("location:unsuccessregistration.php");
    }
    
    ?>