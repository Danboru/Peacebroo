<!--
    __                       __
   /\ \                     /\ \
  _\_\ \      __     __  ___\ \ \__._     ___
 /, _ . \   /'__`\  /\ \ \  \\ \  __ \   / __`\
/\  \L\  \ /\ \L\.\_\ \  V   \\ \ \_\ \ /\ \L\ \
\ \____,__\\ \__/.\_\\ \  /\  \\ \ ___,\\ \____/
 \/___, _ / \/__/\/_/ \_\_\ \__\\/__,__/ \/___/

-->

<?php

foreach ( $isi_status as $status) {  ?>

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
