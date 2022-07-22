<?php

@include '../../../config.php';
include '../../admindashpanel.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:../../../admin_page.php');
      }
   }

};


?>
    <link rel="stylesheet" href="../../../style.css">
   <link rel="stylesheet" href="../../../css/style.css">

   
<div class="form-container">

   <form action="" method="post">
      <h3>Create Users</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter name/username">
      <input type="text" name="email" required placeholder="enter email">
      <input type="password" name="password" required placeholder="enter temporary password">
      <input type="password" name="cpassword" required placeholder="confirm temporary password">
      <select name="user_type">
         <option value="Eco_user">Eco_user</option>
         <option value="Police_user">Police_User</option>
         <option value="Insuarance_user">Insuarance_user</option>
         <option value="admin">Admin</option>
      </select>
      <input type="submit" name="submit" value="register a new user" class="form-btn">
   </form>

</div>
<script src="script.js"></script>
</body>
</html>