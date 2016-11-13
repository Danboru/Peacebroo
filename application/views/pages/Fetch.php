<?php  ?>
<!-- Bagian Utama -->
<div class="col-sm-7">
  <!-- Bagian View Status Secara dinamis -->

  <!-- php_open() -->
  <?php foreach ( $isi_status as $status) {  ?>

   <!-- Bagian View Status -->
   <div class="panel panel-default">
     <div class="panel-heading">
       <a href="#" class="pull-right">Edit</a>
       <img src="assets/images/sponge.jpg" style="width : 40px;">
         <h4><?php echo $this->session->userdata("nama"); ?></h4>
       <?php echo '<p style="font-size : 11px;">'.$status['time'].'</p>'; ?>
     </div>
      <div class="panel-body">

        <?php echo '<p>'.$status['isi_status'].'</p>'; ?>
          <hr>
        <div class="likenya">
            <p>
              1K<img style="width : 30px; margin-bottom : 0px;" src="assets/images/emo/emo1.jpg" alt="" />
              2K<img style="width : 30px; margin-bottom : 0px;" src="assets/images/emo/emo2.jpg" alt="" />
              3K<img style="width : 30px; margin-bottom : 0px;" src="assets/images/emo/emo3.jpg" alt="" />
              4K<img style="width : 30px; margin-bottom : 0px;" src="assets/images/emo/emo4.jpg" alt="" />
              5K<img style="width : 30px; margin-bottom : 0px;" src="assets/images/emo/emo5.jpg" alt="" />
              6K<img style="width : 30px; margin-bottom : 0px;" src="assets/images/emo/emo6.jpg" alt="" />
            </p>
        </div>

        <form>
        <div class="input-group">

          <div class="input-group-btn">
          <button class="btn btn-default" title="Suka">+1</button>
          <button class="btn btn-default"><i class="glyphicon glyphicon-share" title="Bagikan"></i></button>
          </div>
          <input type="text" class="form-control" placeholder="Add a comment..">
        </div>
        <hr>

         <div class="komentar">
             <p>
              <img src="assets/images/images4.png" style="width : 40px;">
               <span id="spasi" style="margin-right : 5px; margin-left : 5px;"></span>Aku jadi yang pertama berkomentar
               <a href="#" class="pull-right">Edit</a>
             </p>
             <hr>
         </div>

         <div class="komentar">
             <p>
              <img src="assets/images/images3.png" style="width : 40px;">
               <span id="spasi" style="margin-right : 5px; margin-left : 5px;"></span>Aku jadi yang kedua aja , , , :)
               <a href="#" class="pull-right">Edit</a>
             </p>
             <hr>
         </div>

         <div class="komentar">
             <p>
              <img src="assets/images/images2.png" style="width : 40px;">
               <span id="spasi" style="margin-right : 5px; margin-left : 5px;"></span>Gpp jadi yang ketiga , , ,
               <a href="#" class="pull-right">Edit</a>
             </p>
             <hr>
         </div>

         <div class="komentar">
             <p>
              <img src="assets/images/images1.png" style="width : 40px;">
               <span id="spasi" style="margin-right : 5px; margin-left : 5px;"></span>yah , , jadi yang ke empat :(
               <a href="#" class="pull-right">Edit</a>
             </p>
             <hr>
         </div>

        </form>
      </div>
   </div>
   <!-- Bagian View Status Secara dinamis -->

    <?php } ?>
   <!-- php_close() -->

</div>
 <!-- Bagian Utama -->

 <? ?>
