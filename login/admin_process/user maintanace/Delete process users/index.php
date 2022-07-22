<?php  
 include '../../admindashpanel.php'; 
 include 'connection.php';  
 $query = "select * from user_form";  
 $run = mysqli_query($conn,$query);  
 ?>  
       <link rel="stylesheet" type="text/css" href="style.css">
       <link rel="stylesheet" href="../../../style.css">
       <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Name</th>  
                                <th>Email</th>  
                                <th>User Type</th>  
                                <th>Operation</th>  
                                </tr>
                            </thead>
                            <tbody> 
      <tr class="heading">  
           
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr>  
                          <td>".$i++."</td>  
                              
                               <td>".$result['name']."</td>  
                               <td>".$result['email']."</td>  
                               <td>".$result['user_type']."</td>   
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  
 </body>  
 </html>  