<?php

foreach ( $isi_status as $status) {  ?>

<link href="assets/css/bootstrap.min.css" rel="stylesheet">

 <!-- Bagian View Status -->
 <div class="panel panel-default">
   <div class="panel-heading"><a href="#" class="pull-right">Edit</a> <h4><?php echo $this->session->userdata("nama"); ?></h4></div>
    <div class="panel-body">

      <?php echo '<p>'.$status['isi_status'].'</p>'; ?>

      <hr>
      <form>
      <div class="input-group">
        <div class="input-group-btn">
        <button class="btn btn-default">+1</button><button class="btn btn-default"><i class="glyphicon glyphicon-share"></i></button>
        </div>
        <input type="text" class="form-control" placeholder="Add a comment..">
      </div>
      </form>

    </div>
 </div>
 <!-- Bagian View Status -->


  <?php }
 ?>
