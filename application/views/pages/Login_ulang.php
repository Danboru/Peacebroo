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
<link rel="icon" href="assets/images/favicon.png" title="Error">
</head>

<body class="login">
<!-- header starts here -->
<div id="facebook-Bar">
  <div id="facebook-Frame">
    <div id="logo"> <a href="#">Login Error</a> </div>


        <div id="header-main-right">
          <div id="header-main-right-nav">



      </div>
          </div>
      </div>
</div>
<!-- header ends here -->

<div class="loginbox radius" style="border : 1px solid red; background : #ffebe8;">
<h2 style="color:#555555; text-align:center;">Email atau Password Salah</h2>
	<div class="loginboxinner radius">
    	<div class="loginheader">
    		<h4 class="title">Coba Periksa sekali lagi</h4>
    	</div><!--loginheader-->

        <div class="loginform">

        	<form id="login" action="<?php echo base_url('login/aksi_login');?>" method="post">
            
                    <input type="text" id="username" name="email" placeholder="Email" value="" class="radius" />
                </p>
                <p>
                    <input type="password" id="password" name="pass" placeholder="Password" class="radius" />
                </p>

                <br>

                <p>
                	<button class="radius title" name="client_login">Masuk</button>
                </p>
            </form>
        </div><!--loginform-->
    </div><!--loginboxinner-->
</div><!--loginbox-->

</body>

</html>
