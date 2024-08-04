<?php

include 'partials/header.php';

?>

<div class="wrapper">
        <div class="sidebar" data-color="red" data-image=".https://demos.creative-tim.com/light-bootstrap-dashboard/assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
               
          <ul class="nav" >
                    <li >
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li >
                        <a class="nav-link" href="add-doners.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Add Doners</p>
                        </a>
                    </li>
                    <li  >
                        <a class="nav-link" href="add-reciever.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Add Receiver</p>
                        </a>
                    </li>
                    <li  class="nav-item active">
                        <a class="nav-link" href="manage-users.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                    <li >
                        <a class="nav-link" href="add-users.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Add users</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="contact-users.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Contact users</p>
                        </a>
                    </li>
                    
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="<?=ROOT_URL?>logout.php">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        <div class="sidebar-background" style="background-image: url(https://demos.creative-tim.com/light-bootstrap-dashboard/assets/img/sidebar-5.jpg) "></div></div>
        <div class="main-panel">
            <!-- fixed plugin  -->
           
            <!-- Navbar -->
         
            <div class="content">
                <div class="container-fluid">

                                     
                <div class="col-md-12">
                            <div class="card  card-tasks">
                                <div class="card-header ">
                                    <h4 class="card-title">Users</h4>
                
                                </div>
                                <div class="card-body ">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
                                            <?php $sql_user="SELECT * FROM users WHERE is_admin=0";
                                              $result_user=mysqli_query($connection,$sql_user); ?>
                                        <?php while($user=mysqli_fetch_assoc($result_user)): ?>
                                              
                                        
                                                <tr>
                                                    <td><?=$user['firstname']?>&nbsp;<?=$user['lastname']?>
                                                    </td>
                                                    <td class="td-actions text-right">
                                                       
                                                    <a href="delete-user.php?id=<?= $user['id'] ?>" type="button" style="color:white ;"  rel="tooltip" title="" class="btn btn-danger btn-simple btn-link" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                               
                                                <?php endwhile ?>   

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>

                                <div class="card  card-tasks">
                                <div class="card-header ">
                                    <h4 class="card-title">Admins</h4>
                
                                </div>
                                <div class="card-body ">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
                                              <?php $sql="SELECT * FROM users WHERE is_admin=1";
                                              $result=mysqli_query($connection,$sql); ?>
                                        <?php while($admin=mysqli_fetch_assoc($result)): ?>
                                                <tr>
                                                    <td><?=$admin['firstname']?>&nbsp;<?=$admin['lastname']?>
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        
                                                    <a href="delete-user.php?id=<?= $admin['id'] ?>" type="button" style="color:white ;"  rel="tooltip" title="" class="btn btn-danger btn-simple btn-link" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                               
                                                <?php endwhile ?>
                                                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




   
                    
                
                    
                </div>

                
                </div>
            </div>
            
        </div>
    </div>
