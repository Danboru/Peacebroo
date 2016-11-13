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
		<div class="header"><?php echo $this->session->userdata("status"); ?> <div class="close_btn">&nbsp;</div></div>
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
	<input type="file" id="upload" name="upload" style="visibility: hidden; width: 1px; height: 1px" multiple />
	<!-- popup upload file -->



	<!--Popup update statusny-->
	<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog">
	  <div class="modal-content">
	      <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				Update Keadaan
	      </div>
	      <div class="modal-body">
	          <form class="form center-block">
	            <div class="form-group">
	              <textarea class="form-control input-lg" autofocus="" placeholder="Apa yang kamu Renungkan?"></textarea>
	            </div>
	          </form>
	      </div>
	      <div class="modal-footer">
	          <div>
	          <button class="btn btn-primary btn-sm" data-dismiss="modal" aria-hidden="true">Sebarkan</button>

							<ul class="pull-left list-inline">
								<li>
									<a href=""><i class="glyphicon glyphicon-upload" onclick="document.getElementById('upload').click(); return false"></i></a>
								</li>

								<li>
									<a href=""><i class="glyphicon glyphicon-camera"></i></a>
								</li>

								<li>
									<a href=""><i class="glyphicon glyphicon-map-marker"></i></a>
								</li>

						 </ul>
			  </div>
	      </div>
	  </div>
	  </div>
	</div>
	<!--Popup update statusny-->

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


                </ul></center>

              <!-- tiny only nav-->
              <ul class="nav visible-xs" id="xs-menu">


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



                          </div>
													<!-- /main col kiri -->

													<!-- Container status keselluruhan -->
													<div id="statusny">
                          <!-- Bagian Utama -->
                          <div class="col-sm-7">


                          </div>
													</div>

                       </div>
                       <!-- Bagian Utama -->


                        <!-- Bagian Footernya -->
                        <div class="row" id="footer">
                          <div class="col-sm-6">

                          </div>

                        </div>
                        <!-- Bagian Footernya -->

                      <hr>

                      <h4 class="text-center">
                      <p>Beranda</p>
                      </h4>

                      <hr>
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->

        </div>
    </div>
</div>

	<!-- script references untuk jsnya -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/autoload_chat.js"></script>

	</body>
</html>
