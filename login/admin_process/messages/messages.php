<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php
include('../admindashpanel.php');
?>
 <link href=".../../../../style.css" rel="stylesheet" />
<div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subjecct</th>
                                    <th>Message</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    @include('config.php');
                                    $con =OpenCon();
                                        $query = "SELECT * FROM contact ORDER BY id DESC";
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
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
