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
                    <li >
                        <a class="nav-link" href="add-users.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Add users</p>
                        </a>
                    </li>
                    <li  class="nav-item active">
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

                  <div class="container-fluid mb-5" id="container2">
                       <div class="container">
                       <div class="row gy-3 my-5">
        
                       <?php 
                                                    
                                                    $fetch_reciever_query ="SELECT * FROM doners";
                                                    $fetch_reciever_result = mysqli_query($connection,$fetch_reciever_query);

                                                    
                                                    ?>
                                        <?php while($doner = mysqli_fetch_assoc($fetch_reciever_result) ) :?>

           <div class="col-md-3">
                    <div class="card" >
                         <div class="card-body">
                                     <h5 class="card-title"><?=$doner['first_name']?></h5>
                                               <p class="card-text">Blood Group <strong> <?=$doner['blood_grp']?></strong></p>
                                               <p class="card-text">Last date  <strong> <?=$doner['date']?></strong></p>
                                               <p class="card-text">place <strong> <?=$doner['place']?></strong></p>
                                               <label for="">contact number</label>
                              <a href="#" class="btn btn-primary" style="color:aliceblue"> <?=$doner['phone']?><</a>
                             </div>
                     </div>
             </div>
             <?php endwhile ?>


                       </div>
                      </div>
                
                </div>
            </div>
            
        </div>
    </div>
