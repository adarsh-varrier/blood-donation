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
                    <li>
                        <a class="nav-link" href="manage-users.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Manage Users</p>
                        </a>
                    </li>
                    <li  class="nav-item active">
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
                              
                                <div class="card" id="appointment">

                    <h5 class="card-header danger-color white-text text-center py-4">
                        <strong>Add Users</strong>
                    </h5>
                    <?php if(isset($_SESSION['add-user'])) :  ?>
                <p style="color: red; text-align:center; background-color: #ea090935;">
                <?= $_SESSION['add-user']  ;
                unset($_SESSION['add-user']); ?>
                 </p>
            <?php endif ?>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="add-user-log.php" method="POST">

                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="fname">
                                        <label for="materialRegisterFormFirstName">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
                                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="lname">
                                        <label for="materialRegisterFormLastName">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <!-- Email -->
                                    <div class="md-form">
                                        <input type="email" id="materialRegisterFormEmail" class="form-control" name="email">
                                        <label for="materialRegisterFormEmail">E-mail</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- username -->
                                    <div class="md-form">
                                        <input type="text" id="materialRegisterFormPhone" class="form-control"
                                            aria-describedby="materialRegisterFormPhoneHelpBlock" name="username">
                                        <label for="materialRegisterFormPhone">user name</label>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="md-form">
                                    <input type="password" id="materialRegisterFormBloodGroup" class="form-control" name="password">
                                    <label for="materialRegisterFormBloodGroup">password</label>
                                </div>
                                <div class="md-form">
                                    <input type="password" id="materialRegisterFormBloodGroup" class="form-control" name="c-password">
                                    <label for="materialRegisterFormBloodGroup">Confirm password</label>
                                </div>
                                <div class="md-form">
                                 <select name="user-role" >
                    <option value="0">user</option>
                    <option value="1">admin</option>
                </select>
                <label for="materialRegisterFormBloodGroup">user Role</label>
                                </div>
                                                         
                            <!-- Sign up button -->
                            <button style="color: white;" class="btn btn-danger btn-rounded btn-block my-4 waves-effect z-depth-0"
                                type="submit" name="submit">Add User</button>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form register -->
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                </div>
            </div>
            
        </div>
    </div>
