<?php

include 'partials/header.php';

?>
  
    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image=".https://demos.creative-tim.com/light-bootstrap-dashboard/assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
               
          <ul class="nav" >
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="add-doners.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Add Doners</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="add-reciever.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Add Receiver</p>
                        </a>
                    </li>
                    <?Php if(isset($_SESSION['is_admin'])) : ?>
                    <li>
                        <a class="nav-link" href="manage-users.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                    <li>
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
                    <?php endif ?>
                    
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
                                    <h4 class="card-title">My Doner lists</h4>
                
                                </div>
                                <div class="card-body ">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
                                            <?php 
                                                    $id=$_SESSION['usr-id'];
                                                    $fetch_doner_query ="SELECT * FROM doners WHERE user_id=$id ";
                                                    $fetch_doner_result = mysqli_query($connection,$fetch_doner_query);

                                                    
                                                    ?>
                                        <?php while($doner = mysqli_fetch_assoc($fetch_doner_result) ) :?>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" value="" checked="">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                
                                                    <td><?=$doner['first_name']." ".$doner['last_name']."  with blood group of ".$doner['blood_grp'] ?>
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <a href="edit-doners.php?id=<?= $doner['id'] ?>" style="color:white ;" rel="tooltip" title="" class="btn btn-info btn-simple btn-link" data-original-title="Edit Task">
                                                            <i class="fa fa-edit"></i>
                                                            </a>
                                                        <a href="delete-doner.php?id=<?= $doner['id'] ?>" type="button" style="color:white ;"  rel="tooltip" title="" class="btn btn-danger btn-simple btn-link" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <?php endwhile?>
                                               
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
                                    <h4 class="card-title">My Receivng lists</h4>
                
                                </div>
                                <div class="card-body ">
                                    <div class="table-full-width">
                                        <table class="table">
                                            <tbody>
                                            <?php 
                                                    $id=$_SESSION['usr-id'];
                                                    $fetch_reciever_query ="SELECT * FROM reciever WHERE user_id=$id ";
                                                    $fetch_reciever_result = mysqli_query($connection,$fetch_reciever_query);

                                                    
                                                    ?>
                                        <?php while($reciever = mysqli_fetch_assoc($fetch_reciever_result) ) :?>
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" value="" checked="">
                                                                <span class="form-check-sign"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                
                                                    <td><?=$reciever['first_name']." ".$reciever['last_name']."  with blood group of ".$reciever['blood_grp'] ?>
                                                    </td>
                                                    <td class="td-actions text-right">
                                                        <a href="edit-reciever.php?id=<?= $reciever['id'] ?>" style="color:white ;" rel="tooltip" title="" class="btn btn-info btn-simple btn-link" data-original-title="Edit Task">
                                                            <i class="fa fa-edit"></i>
                                                            </a>
                                                        <a href="delete-reciever.php?id=<?= $reciever['id'] ?>" type="button" style="color:white ;"  rel="tooltip" title="" class="btn btn-danger btn-simple btn-link" data-original-title="Remove">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <?php endwhile?>
                                               
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
