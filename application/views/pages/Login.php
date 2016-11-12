<!--
    __                       __
   /\ \                     /\ \
  _\_\ \      __     __  ___\ \ \__._     ___
 /, _ . \   /'__`\  /\ \ \  \\ \  __ \   / __`\
/\  \L\  \ /\ \L\.\_\ \  V   \\ \ \_\ \ /\ \L\ \
\ \____,__\\ \__/.\_\\ \  /\  \\ \ ___,\\ \____/
 \/___, _ / \/__/\/_/ \_\_\ \__\\/__,__/ \/___/

-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Peacebroo</title>
<link rel="stylesheet" href="assets/css/login_style.css" type="text/css" />
<link rel="icon" href="assets/images/favicon.png" title="Peacebroo">
</head>

<body class="login">
<!-- header starts here -->
<div id="facebook-Bar">
  <div id="facebook-Frame">
    <div id="logo"> <a href="http://danboru.dev/Peacebroo/profil">Peacebroo</a> </div>


        <div id="header-main-right">
          <div id="header-main-right-nav">

        <form method="post" action="<?php echo base_url('login/aksi_login');?>" id="login_form" role="form">
          <table border="0" style="border:none">
            <tr>
              <td ><input type="text" tabindex="1"  id="email" placeholder="Email" name="email" class="inputtext radius1" value=""></td>
              <td ><input type="password" tabindex="2" id="pass" placeholder="Password" name="pass" class="inputtext radius1" ></td>
              <td ><input type="submit" class="fbbutton" name="login" value="Login"/></td>
            </tr>
            <tr>
            <td><label><input id="persist_box" type="checkbox" name="persistent" value="1" checked="1"/><span style="color:#ccc;">Jangan Lupakan Aku</span></label>
            </td>
            <td><label><a href="" style="color:#ccc; text-decoration:none">Lupa lagi?</a></label></td>
            </tr>
          </table>
        </form>
      </div>
          </div>
      </div>
</div>
<!-- header ends here -->

<div class="loginbox radius">
<h2 style="color:#141823; text-align:center;">Peacebroo</h2>
	<div class="loginboxinner radius">
    	<div class="loginheader">
    		<h4 class="title">Terhubung dengan Calon dan Mantan.</h4>
    	</div><!--loginheader-->

        <div class="loginform">

        	<form id="login" action="" method="post">

                    <p>
                    <input type="text" id="username" name="username" placeholder="Nama Depan" value="" class="radius mini" />
                    <input type="text" id="username" name="username" placeholder="Nama Belakang" value="" class="radius mini" />
                    </p>

            	<p>
                    <input type="text" id="username" name="username" placeholder="Email Kamu" value="" class="radius" />
                </p>
                <p>
                    <input type="text" id="password" name="password" placeholder="Masukkan Lagi Email Mu" class="radius" />
                </p>
                <p>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" class="radius" />
                </p>
                <p>
                	<button class="radius title" name="client_login">Daftar</button>
                </p>
            </form>
        </div><!--loginform-->
    </div><!--loginboxinner-->
</div><!--loginbox-->

</body>

</html>
