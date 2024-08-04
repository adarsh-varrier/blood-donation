<?php

include 'partials/header.php';



if(isset($_GET['id']))
{
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
    $qry = "SELECT * FROM doners WHERE id=$id";
    $result = mysqli_query($connection,$qry);
    $users = mysqli_fetch_assoc($result);      
}
else
{
    header('location:index.php');
    die();
}


?>

<div class="wrapper">
        <div class="sidebar" data-color="red" data-image=".https://demos.creative-tim.com/light-bootstrap-dashboard/assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
               
          <ul class="nav" >
                    <li class=" active">
                        <a class="nav-link" href="index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
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
                    <?php endif?>
                    
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
                        <strong>REQUEST APPOINTMENT FOR DONERS</strong>
                        
                    </h5>
                   <?php if(isset($_SESSION['edit-doner'])) :  ?>
                <p style="color: red; text-align:center; background-color: #ea090935;">
                <?= $_SESSION['edit-doner']  ;
                unset($_SESSION['edit-doner']); ?>
                 </p>
            <?php endif ?>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="edit_doner_logic.php" method="POST">

                            <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="fname"  value="<?= $users['first_name'] ?>" >
                                        <label for="materialRegisterFormFirstName" >First name</label>
                                    </div>
                                    <input type="hidden"  value="<?= $users['id'] ?>" name="id">
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
                                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="lname"  value="<?= $users['last_name'] ?>">
                                        <label for="materialRegisterFormLastName">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <!-- Email -->
                                    <div class="md-form">
                                        <input type="email" id="materialRegisterFormEmail" class="form-control" name="email"  value="<?= $users['email'] ?>" >
                                        <label for="materialRegisterFormEmail">E-mail</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Phone Number -->
                                    <div class="md-form">
                                        <input type="text" id="materialRegisterFormPhone" class="form-control"
                                            aria-describedby="materialRegisterFormPhoneHelpBlock" name="phone"  value="<?= $users['phone'] ?>">
                                        <label for="materialRegisterFormPhone">Phone number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <!-- Date -->
                                    <div class="md-form">
                                        <input type="date" id="materialRegisterFormDate" class="form-control" name="date"  value="<?= $users['date'] ?>">
                                        <label for="materialRegisterFormEmail">Date</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Time -->
                                    <div class="md-form">
                                        <input type="time" id="materialRegisterFormTime" class="form-control"
                                            aria-describedby="materialRegisterFormPhoneHelpBlock" name="time"  value="<?= $users['time'] ?>">
                                        <label for="materialRegisterFormPhone">Time</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Blood Group -->
                                <div class="md-form">
                                    <div class="md-form">
                                <div class="custom-select" style="width:200px;">
  <select name="blood-grp" >
    <option >Select Blood Group:</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    
  </select>
</div>
                                </div>
                                </div>
                                <!-- pplace -->
                                <div class="md-form">
                                    <input type="text" id="materialRegisterFormBloodGroup" class="form-control" name="place"  value="<?= $users['place'] ?>">
                                    <label for="materialRegisterFormBloodGroup">place</label>
                                </div>
                               
                               

                            <!-- Sign up button -->
                            <button style="color: white;" class="btn btn-danger btn-rounded btn-block my-4 waves-effect z-depth-0"
                                type="submit" name="submit">update</button>

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
