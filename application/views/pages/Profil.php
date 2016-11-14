<!--
    __                       __
   /\ \                     /\ \
  _\_\ \      __     __  ___\ \ \__._     ___
 /, _ . \   /'__`\  /\ \ \  \\ \  __ \   / __`\
/\  \L\  \ /\ \L\.\_\ \  V   \\ \ \_\ \ /\ \L\ \
\ \____,__\\ \__/.\_\\ \  /\  \\ \ ___,\\ \____/
 \/___, _ / \/__/\/_/ \_\_\ \__\\/__,__/ \/___/

-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Peacebroo</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/chatboxnya.css">
		<link rel="icon" href="assets/images/favicon.png" title="Peacebroo">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="assets/css/style.css" rel="stylesheet">

	</head>

	<!-- bagian popup mulai darisini -->

	<!-- Bagian popup Chatnya -->
	<div id="panggil_chat">
		<div class="shout_box">
			<div id="status" style="padding-top : 5px; padding-bottom : 5px;"><div class="circle_green"></div> </div>

		<div class="header">
			<?php echo $this->session->userdata("status"); ?> <div class="close_btn">&nbsp;</div></div>
		  <div class="toggle_chat">
		  <div class="message_box">
		    </div>
		    <div class="user_info">
		    <input name="shout_username" id="shout_username" type="text" placeholder="Nama Kamu" maxlength="15" />
		    <input name="shout_message" id="shout_message" type="text" placeholder="Ketik Pesan, Tekan enter" maxlength="100" />
		    </div>
		    </div>
		</div>
	</div>
	<!-- /Bagian popup Chatnya -->

	<!-- popup upload file -->
	<input type="file" id="upload" name="upload_file" style="visibility: hidden; width: 1px; height: 1px" multiple />
	<!-- popup upload file -->


	<!--Popup Map -->
	<div id="postModalPeta" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				Location
	      </div>
	      <div class="modal-body">

					<img src="assets/images/map.png" alt=""/ style="width: 100%; height : 100%;">

	      </div>

				<div class="modal-footer">

					<div class="well">

						 <form method="post" enctype="multipart/form-data" action="<?php echo base_url('input/upload');?>">

								<input type="submit"  value="Select Location" class="btn btn-primary" style="width : 100%;">

						 </form>
				 </div>

			  </div>

	      </div>
	  </div>
	  </div>
	<!-- Popup Map -->


	<!--Popup Kamera -->
	<div id="postModalKamera" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" >
		<div class="modal-dialog">
		<div class="modal-content">
				<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				Kamera
				</div>

				<div class="modal-body">

						<img src="assets/images/atas.png" alt=""/ style="width: 100%; height : 100px;">
						<div class="bagian_foto" style="height: 200px;"></div>
						<img src="assets/images/bawah.png" alt=""/ style="width: 100%; height:200px">

				</div>
				</div>
		</div>
		</div>
	<!--Popup Kamera -->

	<!--Popup Upload -->
	<div id="postModalUpload" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				Upload File
	      </div>
	      <div class="modal-body">

					<div class="well">

						 <form method="post" enctype="multipart/form-data" action="<?php echo base_url().'input/upload';?>">

								<textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan" style="width : 100%; height : 40px; "></textarea>
								<br>
									<input type="file" name="userfile">
								<br>
									<input type="submit"  value="Upload" class="btn btn-primary" style="width : 100%;">

						 </form>
				 </div>

	      </div>

				<!-- <div class="modal-footer">

					<div class="well">

						 <form method="post" enctype="multipart/form-data" action="">

								<input type="submit"  value="Upload" class="btn btn-primary" style="width : 100%;">

						 </form>
				 </div>

			 </div> -->

	      </div>
	  </div>
	  </div>
	<!-- Popup upload data -->


	<!--Popup Intro -->
	<div id="postModalIntro" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				Sesuaikan Intro Anda
	      </div>
	      <div class="modal-body">

					<div class="well">



				 </div>

	      </div>

				<!-- <div class="modal-footer">

					<div class="well">

						 <form method="post" enctype="multipart/form-data" action="<?php echo base_url('input/upload');?>">

								<input type="submit"  value="Upload" class="btn btn-primary" style="width : 100%;">

						 </form>
				 </div>

			 </div> -->

	      </div>
	  </div>
	  </div>
	<!-- Popup intro -->


	<!-- bagian popup berakhir di sini -->

	<body>
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-right">

            <!-- sidebar -->
            <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">

              <ul class="nav">
          			<li>
									<a href="#" data-toggle="offcanvas" class="visible-xs text-center"><i class="glyphicon glyphicon-chevron-right"></i></a>
								</li>
            	</ul>

               <center>
                <ul class="nav hidden-xs" id="lg-menu">
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 1</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 2</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 3</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 4</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 5</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 6</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 7</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 8</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 9</a></li>
                    <li class="active"><a href="#featured"><i class="glyphicon glyphicon-user"></i> Teman 0</a></li>

                </ul></center>

              <!-- tiny only nav-->
              <ul class="nav visible-xs" id="xs-menu">

										<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>
										<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>
										<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>
                  	<li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-user"></i></a></li>

                </ul>

            </div>
            <!-- /sidebar -->

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">

                <!-- navigasi atas -->
              	<div class="navbar navbar-blue navbar-static-top">
                    <div class="navbar-header">
                      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
          				<span class="icon-bar"></span>
          				<span class="icon-bar"></span>
                      </button>

                      <!-- Bagian Logo -->
                      <a href="http://danboru.dev/Peacebroo/profil" class="navbar-brand logo">P</a>
                      <!-- Bagian Logo -->

                  	</div>
                  	<nav class="collapse navbar-collapse" role="navigation">

                  	<!-- Bagian Searching -->
                    <form class="navbar-form navbar-left">
                        <div class="input-group input-group-sm" style="max-width:360px;">
                          <input type="text" class="form-control" placeholder="Cari Jodoh" name="srch-term" id="srch-term">
                          <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                          </div>
                        </div>
                    </form>

                    <ul class="nav navbar-nav">
                      <li>
                        <a href="#"><i class="glyphicon glyphicon-home"></i> Beranda</a>
                      </li>
                      <li>
                        <a href="#postModalUpload" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Upload</a>
                      </li>
                      <li>
                        <a href="#"><span class="badge">Pesan</span></a>
                      </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right kirisedikit">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
                        <ul class="dropdown-menu">
                          <li><a href="http://danboru.dev/Peacebroo/pengaturan">Pengaturan</a></li>
                          <li><a href="http://danboru.dev/Peacebroo/privacy">Privacy</a></li>
                          <li><a href="http://danboru.dev/Peacebroo/halaman">Halaman</a></li>
                          <li><a href="http://danboru.dev/Peacebroo/iklan">Iklan</a></li>
                          <li><a href="<?php echo base_url('login/logout'); ?>">Keluar</a></li>
                        </ul>
                      </li>
                    </ul>

                  	</nav>

                </div>
                <!-- /navigasi atas -->

                <div class="padding">
                    <div class="full col-sm-9">

                        <!-- content -->
                      	<div class="row">

                         <!-- main col kiri -->
                         <div class="col-sm-5">


                           	<!-- Bagian Foto Profile -->
                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><img src="assets/images/sponge.jpg" class="img-responsive"></div>
                                <div class="panel-body">
                                  <p class="lead"><?php echo $this->session->userdata("nama"); ?></p>
                                  <p><?php echo $this->session->userdata("folower"); ?> Followers, <?php echo $this->session->userdata("post"); ?> Posts</p>

                                  <p style="margin-left : 3%;">
                                    <img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px" >
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
                                  </p>

																	<p style="margin-left : 3%;">
                                    <img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px" >
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
																		<img src="assets/images/unnamed.png" width="30px" height="30px">
                                  </p>

                                </div>
                              </div>
                              	<!-- Bagian Foto Profile -->

																<div class="well">

																	<center><a href="#" onclick="toggle_visibility('panggil_chat');">Hide Chat</a></center>

																</div>

                              	<!-- Bagian Buat Status -->
                              	<div class="well">

																	<form class="form-horizontal" name="add_status" method="post">
																	 <h4>Apa Yang Kamu Renungkan ?</h4>
																		<div class="form-group" style="padding:14px;">

																		 <!-- Textarea yang dikirim ke JS Handler -->
																		 <textarea class="form-control" name="tweet" id="tweet" placeholder="Tulis Di Sini"></textarea>
																	 </div>

																		 <!-- Submit yang dikirim ke JS Handler -->
																		 <input class="btn btn-primary pull-right" name="btn_tweet" id="btn_tweet" type="button" value="Sebarkan">

																	 </form>

																	 <form class="form-horizontal" role="form">
																	 <ul class="list-inline">
																		 <li>
																			 <a href=""><i class="glyphicon glyphicon-upload" onclick="document.getElementById('upload').click(); return false"></i></a>
																		 </li>

																		 <li>
																			 <a href="#postModalKamera" role="button" data-toggle="modal"><i class="glyphicon glyphicon-camera"></i></a>
																		 </li>

																		 <li>
																			 <a href="#postModalPeta" role="button" data-toggle="modal"><i class="glyphicon glyphicon-map-marker"></i></a>
																		 </li>
																	 </ul>

																 </form>

                              </div>
                              <!-- Bagian Buat Status -->

															<!-- Bagian Upload File
															<div class="well">

																 <form method="post" enctype="multipart/form-data" action="<?php echo base_url('input/upload');?>">

																	 	<textarea class="form-control" name="keterangan" placeholder="Masukkan Keterangan" style="width : 100%; height : 40px; "></textarea>
																		<br>
																		  <input type="file" name="inputgambar">
																			<br>
																		<input type="submit"  value="Upload" class="btn btn-primary" style="width : 100%;">

																 </form>
														 </div>
															Bagian Upload File -->

                              <div class="panel panel-default">
                                <div class="panel-heading">

																<a href="#postModalIntro" role="button" data-toggle="modal" class="pull-right">Edit</a>



																	<h4>Intro</h4></div>
                                  <div class="panel-body">
                                    <div class="list-group">
                                      <a href="#" class="list-group-item"><p><?php echo $this->session->userdata("sekolah"); ?></p></a>
                                      <a href="#" class="list-group-item"><p><?php echo $this->session->userdata("alamat"); ?></p></a>
                                      <a href="#" class="list-group-item"><p><?php echo $this->session->userdata("pekerjaan"); ?></p></a>
                                    </div>
                                  </div>
                              </div>

                            <!-- Update Email -->
                              <div class="well">
                                   <form class="form">
                                    <h4>Ubah Email</h4>
                                    <div class="input-group text-center">
                                    <input type="text" class="form-control input-lg" placeholder="Masukkan Email Baru">
                                      <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
                                    </div>
                                  </form>
                                </div>
                                <!-- Update Email -->

                              <div class="panel panel-default">
                                 <div class="panel-heading">

																	 <!--<a href="#" class="pull-right">Edit</a>-->

																	 <ul class="nav navbar-nav navbar-right">
 																	<li class="dropdown">
 						                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Edit</a>
 						                        <ul class="dropdown-menu">
 						                          <li><a href="#">Lihat Foto Tersembunyi</a></li>
 						                        </ul>
 						                      </li>
 																</ul>

																	 <h4>Foto Anda</h4></div>
                                  <div class="panel-body" style="padding-right: 50px; padding-bottom: 20px;">

                                    <img src="assets/images/images1.png" class="img-rectangle pull-right"> <a href="#"></a>
																		<img src="assets/images/images2.png" class="img-rectangle pull-right"> <a href="#"></a>
																		<img src="assets/images/images3.png" class="img-rectangle pull-right"> <a href="#"></a>
																		<img src="assets/images/images4.png" class="img-rectangle pull-right"> <a href="#"></a>

                                  </div>
                              </div>

															<!-- Bagian Tentang -->
                              <div class="panel panel-default">
                                <div class="panel-heading"><h4>Tentang Anda?</h4></div>
                               	<div class="panel-body">

                                	Pertanyaan ini pasti dan sering sekali ditanyakan pada awal wawancara kerja, baik saat wawancara kerja HR rekrutmen maupun User. Pertanyaan ini bertujuan untuk mengenal diri kalian lebih dalam lagi, dalam waktu yang cukup singkat.

                                 </div>
                              </div>
															<!-- Bagian Tentang -->

                          </div>
													<!-- /main col kiri -->

													<!-- Container status keseluruhan -->
													<div id="container_statusnya">

                        	<!-- me-load fetch.php -->

													</div>

                       </div>

                        <!-- Bagian Footernya -->
                        <div class="row" id="footer">
                          <div class="col-sm-6">

                          </div>

                        </div>
                        <!-- Bagian Footernya -->

                      <hr>

                      <h4 class="text-center">
                      <p>672014113</p>
                      </h4>

                      <hr>
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->

        </div>
    </div>
</div>

	<!-- script references untuk profil -->

	<script type="text/javascript">
	function toggle_visibility(id) {
	   var e = document.getElementById(id);
	   if(e.style.display == 'block')
	      e.style.display = 'none';
	   else
	      e.style.display = 'block';
	}
	</script>

	<!-- External JS -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="assets/js/input_handler.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/autoload_chat.js"></script>


	</body>
</html>
