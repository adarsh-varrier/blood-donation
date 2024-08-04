<?php
include 'partials/header.php';

?>



    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h3 class="display-4">Receivers</h3>
            <hr class="dots">
            <p class="lead">Those in need of blood </p>
        </div>
    </div>

    <div class="row gy-3 my-5">

<?php $sql="SELECT * FROM reciever";
     $result = mysqli_query($connection,$sql) ?>

     <?Php while( $doner = mysqli_fetch_assoc($result)): ?>
        <div class="col-md-3">
        <div class="card" >
  <div class="card-body">
    <h5 class="card-title"><?php echo $doner['first_name'] ?></h5>
    <p class="card-text">blodd group &nbsp &nbsp<?php echo $doner['blood_grp'] ?></p>
    <p class="card-text">due date &nbsp &nbsp<?php echo $doner['date'] ?></p>
    <p class="card-text">time &nbsp &nbsp<?php echo $doner['time'] ?></p>
    <p class="card-text">place &nbsp &nbsp<?php echo $doner['place'] ?></p>
      <p class="danger">contact &nbsp &nbsp<?php echo $doner['phone'] ?></p>
  </div>
</div>
        </div>

   <?php endwhile ?>
    </div>
   

    

    <?php
include 'partials/footer.php';

?>